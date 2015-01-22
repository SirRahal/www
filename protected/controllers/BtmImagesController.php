<?php

class BtmimagesController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin'),
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
		$model=new Btmimages;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Btmimages']))
		{
			$model->attributes=$_POST['Btmimages'];
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

		if(isset($_POST['Btmimages']))
		{
			$model->attributes=$_POST['Btmimages'];
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
        $temp_model = $this->loadModel($id);
        $lot = Btmlistings::model()->findByPk($temp_model->btm_listing_ID);
        $file_directory = './images/btm_uploads/'.$lot->auction_ID.'/';
        $images = $lot->btmImages;

        $count = 1;
        foreach($images as $image){
            //if it's not the delete image
            if($image->ID != $id){
                //update database
                $image_extention = explode('.',$image->name);
                $image_extention = $image_extention[1];
                //update database name to new name
                $new_file_name = $lot->lot.'_'.$count.'.'.$image_extention;
                //rename all images to the new lot #'s with the prefix Temp_
                rename($file_directory.$image->name, $file_directory.$new_file_name);
                $image->name = $new_file_name;
                $image->save();
                $count++;
            }else{//else
                //delete
                $file = $file_directory.$image->name;
                if(realpath($file)){
                    unlink($file);
                    $temp_model->delete();
                }elseif(!realpath($file)){
                    //error
                }
            }
        }
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Btmimages');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Btmimages('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Btmimages']))
			$model->attributes=$_GET['Btmimages'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Btmimages the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Btmimages::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Btmimages $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='btm-images-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
