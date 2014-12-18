<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('register','resetPassword'),
				'users'=>array('*'),
			),
            array('allow',
                'actions'=>array('update'),
                'users'=>array(Yii::app()->user->name),
                'expression' => 'User::model()->isUser($_GET[\'id\'])'
            ),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin','delete','index','view','create','update'),
				'users'=>array('admin'),
			),
			array('deny', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','index','view','create','update'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);

	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new User;
        $valid = false;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
        //check to see if valid
        if(isset($_POST['User'])){
            $valid = $model->checkValid();
        }
		if($valid)
		{
			$model->attributes=$_POST['User'];
            $model = $this->clean_up_user($model);
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}


    public function clean_up_user($user)
    {
        $model = $user;
        //clean up phone numbers
        $model->phone = preg_replace("/[^0-9]/","",$model->phone);
        //clean up first name
        $model->first_name =ucfirst ($model->first_name);
        //clean up last name
        $model->last_name =ucfirst ($model->last_name);
        return $model;
    }

    public function actionRegister()
    {
        $model=new User;
        $valid = false;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        //check to see if valid
        if(isset($_POST['User'])){
            $valid = $model->checkValid();
        }
        if($valid)
        {
            $model->attributes=$_POST['User'];
            if($model->save()){
                //save ticket to user
                $user_ID = $model->ID;
                $ticket_ID = $_SESSION['ticket_ID'];
                $reassigned = Ticket::model()->reassign_with_IDs($ticket_ID, $user_ID);
                if($reassigned){
                    unset($_SESSION['ticket_ID']);
                    $this->redirect(array('view','id'=>$model->ID));
                }
            }
        }

        $this->render('register',array(
            'model'=>$model,
        ));

    }

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
            $model = $this->clean_up_user($model);
			if($model->save())
				$this->redirect('/index.php/site/index');
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function actionResetPassword(){
        if(isset($_POST['email'])){
            $email = $_POST['email'];
            $user=User::model()->findByAttributes(array('email'=>$email));
            if(isset($user) && $user->ID > 1){
                $new_password = User::model()->password_reset($user->ID);
            }else{
                return false;
            }
            if(isset($new_password) && $new_password != 'error'){
                $name='=?UTF-8?B?'.base64_encode('Bracket Fanatic').'?=';
                $subject='=?UTF-8?B?'.base64_encode('Account Details').'?=';
                $headers="From: $name <{admin@bracketfanatic.com}>\r\n".
                    "Reply-To: {admin@bracketfanatic.com}\r\n".
                    "MIME-Version: 1.0\r\n".
                    "Content-Type: text/html; charset=UTF-8";
                $body = "<html>
                        <body style='font-size: 18px;'>
                            <br/><a href='http://bracketfanatic.com'><img src='http://www.bracketfanatic.com/images/bflogo2.png' width='400'/></a>
                            <br/>
                            <br/>
                            <br/>Thank you for playing Bracket Fanatic.
                            <br/>Do you your request, we have reset your password.
                            <br/>
                            <br/><b>Your account name is :</b> $user->user_name
                            <br/><b>your new password is :</b> $new_password
                            <br/>You can log in <a href='http://bracketfanatic.com/index.php/site/login'>HERE</a>
                            <br/>
                            <br/>Thank you and good luck!
                            <br/><i>Bracket Fanatic</i>
                        </body>
                        </html>";
                mail($email,$subject,$body,$headers);
                Yii::app()->user->setFlash('contact','Your user name and new password has been sent to your email.  Please make sure to check your spam folder.');

            }else{
                return false;
            }
        }else{
            return false;
        }
        return true;

    }
}
