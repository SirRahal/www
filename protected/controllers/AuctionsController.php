<?php

class AuctionsController extends Controller
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
				'actions'=>array('index','view','registerClick','post_auction'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$model=new Auctions;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Auctions']))
		{
			$model->attributes=$_POST['Auctions'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}

		$this->render('create',array(
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

		if(isset($_POST['Auctions']))
		{
			$model->attributes=$_POST['Auctions'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
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
		$dataProvider=new CActiveDataProvider('Auctions', array(
            'criteria'=>array(
                'condition'=>'date >= CURRENT_DATE',
            'order'=>'date ASC'
        )));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Auctions('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Auctions']))
			$model->attributes=$_GET['Auctions'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Auctions the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Auctions::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Auctions $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='auctions-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function actionRegisterClick(){
        $ad_url = $_POST['url'];
        $ad = Auctions::model()->findByAttributes(array('url'=>$ad_url));
        if(isset($ad)){
            $ad->clicks +=1;
            $ad->save();
        }else{
            //error statement
        }
    }

    public function actionPost_auction(){
        $name = $_POST['name'];
        $email= $_POST['email'];
        $phone = $_POST['phone'];
        $auctioneer = $_POST['auctioneer'];
        $title = $_POST['title'];
        $location = $_POST['location'];
        $date = $_POST['date'];
        $url = $_POST['url'];
        $info = $_POST['info'];

        $body = "name : ".$name . "\r".
                "email : ".$email . "\r".
                "phone : ".$phone . "\r".
                "auctioneer : ".$auctioneer . "\r".
                "title : ".$title . "\r".
                "location : ".$location . "\r".
                "date : ".$date . "\r".
                "url : ".$url . "\r".
                "info : ".$info . "\r";

        $name='=?UTF-8?B?'.base64_encode($name).'?=';
        $subject='=?UTF-8?B?'.base64_encode('AUCTION POSTING!').'?=';
        $headers="From: $name <{$email}>\r\n".
            "Reply-To: {$email}\r\n".
            "MIME-Version: 1.0\r\n".
            "Content-Type: text/plain; charset=UTF-8";

        mail(Yii::app()->params['adminEmail'],$subject,$body,$headers);
        return true;
    }
}
