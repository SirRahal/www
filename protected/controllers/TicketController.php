<?php

class TicketController extends Controller
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
            array('allow',
                'actions'=>array('view','update','easypicks'),
                'users'=>array(Yii::app()->user->name),
                'expression' => 'User::model()->ownsTicket($_GET[\'id\'])'
            ),
            array('allow',
                'actions'=>array('myTickets','easypicks','addTicket','validateTicket'),
                'users'=>array('*'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin','delete','index','create','view','update','myTickets','easypicks'),
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
		$model=new Ticket;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Ticket']))
		{
			$model->attributes=$_POST['Ticket'];
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
        //if easy_picks is '1' than retrieve an array of 16 IDs and add them to the session
        if(isset($_POST['easy_picks']) && $_POST['easy_picks']){
            $my_picks = Ticket::model()->easy_pick(); // returns an array of 16
            //save the attribute and refresh
            Yii::app()->user->setState('my_picks', $my_picks);
            $test = Yii::app()->user->getState('my_picks');
            if(isset($test))
            {
                return true;/*
                $this->redirect(array('view','id'=>$model->ID));*/
            }
        }

        if(isset($_POST['Ticket']))
        {
            $model->attributes=$_POST['Ticket'];
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
		$dataProvider=new CActiveDataProvider('Ticket');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Ticket('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Ticket']))
			$model->attributes=$_GET['Ticket'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
    public function actionMyTickets(){
        $this->render('my_tickets');
    }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Ticket the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Ticket::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Ticket $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ticket-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


    public function actionAddTicket(){
        //get the ticket_code, check to see if it is set
        if(isset($_POST['ticket_code'])){
            //set ticket code
            $ticket_code = $_POST['ticket_code'];
            //get ticket that is owned by me with that ticket code
            $ticket = Ticket::model()->find_ticket_by_code($ticket_code);
            //see if the ticket exists
            if($ticket instanceof Ticket){
                return $ticket->reassign($ticket);
            }
        }
        //if anything fails, return false.
        return false;
    }

    public function actionValidateTicket(){
        if(isset($_POST['ticket'])){
            $code = $_POST['ticket'];
            if ($code == 'test'){
                echo '1';
            }
        }else{
            echo '0';
        }
    }
}
