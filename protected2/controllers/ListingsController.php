<?php

class ListingsController extends Controller
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
				'actions'=>array('index','view','upload','listing_table'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','not_on_ebay','upload_images','on_ebay','sold','not_sold','delete_old_images','manual_create','manual_update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
		$model=new Listings;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Listings']))
		{
			$model->attributes=$_POST['Listings'];
            $model = $this->cleanModel($model);
			if($model->save())
				$this->redirect(array('upload_images','id'=>$model->ID));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionManual_create()
    {
        $model=new Listings;

        //set required variables that are not used in a manual listing
        //from
        $model->from = 'Crib';
        $model->manual = 1;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Listings']))
        {
            $model->attributes=$_POST['Listings'];
            $model = $this->cleanModel($model);
            if($model->save())
                $this->redirect(array('upload_images','id'=>$model->ID));
        }

        $this->render('create_manual',array(
            'model'=>$model,
        ));
    }


    /**
     * manual update
     */
    public function actionManual_update($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Listings']))
        {
            $model->attributes=$_POST['Listings'];
            $model = $this->cleanModel($model);
            if($model->save())
                $this->redirect(array('upload_images','id'=>$model->ID));
        }

        $this->render('manual_update',array(
            'model'=>$model,
        ));
    }

    /**
    * Clean up info before going into the database
    *
    **/
    public function cleanModel($model){
        $model->model_number = strtoupper($model->model_number);
        $model->serial_number = strtoupper($model->serial_number);
        $model->internal_number = strtoupper($model->internal_number);
        $model->inventory = strtoupper($model->inventory);
        $model->manufacturer = ucfirst($model->manufacturer);
        $model->board_1 = strtoupper($model->board_1);
        $model->board_2 = strtoupper($model->board_2);
        return $model;
    }

    public function actionUpload_images($id){
        $this->render('upload_images');
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

		if(isset($_POST['Listings']))
		{
			$model->attributes=$_POST['Listings'];
            $model = $this->cleanModel($model);
			if($model->save())
				$this->redirect(array('upload_images','id'=>$model->ID));
		}

        if($model->manual == 1){
            $this->render('manual_update',array(
                'model'=>$model,
            ));
        }else{
            $this->render('update',array(
                'model'=>$model,
            ));
        }

	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
        //delete all images related to that listing
        $delete_model = $this->loadModel($id);
        $this->delete_model_images($delete_model);
        $delete_model->delete();
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Listings');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Listings('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Listings']))
			$model->attributes=$_GET['Listings'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

    public function actionNot_on_ebay(){
        $this->render('not_on_ebay');
    }
    public function actionOn_ebay(){
        $this->render('on_ebay');
    }

    public function actionListing_table($listings){
        $this->render('listing_table',array(
            'listings'=>$listings,
        ));
    }

    public function actionSold(){
        $this->render('sold');
    }

    public function actionNot_sold(){
        $this->render('not_sold');
    }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Listings the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Listings::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Listings $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='listings-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    /**
     * select all listings that have been sold for more than 90 days and delete
     * their images.
     *
     */
    public function actionDelete_old_images(){
        $listings = $this->get_old_sold_listings();
        if(isset($listings)){
            foreach($listings as $listing){
                $this->delete_model_images($listing);
            }
            return true;
        }
            return false;
    }

    /**
     * Get's all listings that have been sold for 90 days
     *
     * */
    public function get_old_sold_listings(){
        $current_date=date('Y-m-d');
        $cut_off = date("Y-m-d", strtotime("-3 months"));
        $criteria = new CDbCriteria();
        $criteria->compare('sold = 1 AND sold_date','<='.$cut_off);
        $listings = Listings::model()->findAll($criteria);
        return $listings;
    }

    public function delete_model_images($model){
        if ($model->images){
            foreach ($model->images as $delete_image){
                $file_dir = './images/uploads/'.$delete_image['image'];
                if(realpath($file_dir)){
                    unlink($file_dir);
                    $delete_image->delete();
                }elseif(!realpath($file_dir)){
                    //error
                }
            }
        }
    }
}
