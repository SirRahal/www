<?php

class BtmauctionsController extends Controller
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
				'actions'=>array('index','view','zipfile'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','order_lots','save_order','admin','export_lots','export_images'),
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
		$model=new Btmauctions;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Btmauctions']))
		{
			$model->attributes=$_POST['Btmauctions'];
			if($model->save()){
                $auction_image_folder = 'images/btm_uploads/'.$model->ID.'/';
                if (!file_exists($auction_image_folder)) {
                    mkdir($auction_image_folder, 0777, true);
                }
                $this->redirect(array('view','id'=>$model->ID));
            }

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

		if(isset($_POST['Btmauctions']))
		{
			$model->attributes=$_POST['Btmauctions'];
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
        $auction = $this->loadModel($id);
        //delete all listings within the auction
        foreach($auction->btmListings as $btm_listing){
            foreach($btm_listing->btmImages as $image){
                //delete images
                $image->delete();
            }
            //delete listing
            $btm_listing->delete();
        }
        //directory of auction info
        $dir = '/images/btm_uploads/'.$auction->ID;
        //delete zipped folders
        if (is_dir($dir.'.zip')) {
            unlink($dir.'.zip');
        }

        //delete folder
        if(is_dir($dir)){
            rmdir($dir);
        }
        //delete the auction
        $auction->delete();
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}


    public function actionOrder_lots($id){
        $model=$this->loadModel($id);
        $this->render('order_lots',array(
            'model'=>$model,
        ));
    }

    public function actionSave_order(){
        //get the auction_ID
        $auction_ID = Yii::app()->request->getPost('auction_ID');
        //get the list from the post method
        $list = Yii::app()->request->getPost('list');
        //set an array
        $output = array();
        //break the json array into an normal array
        $list = parse_str($list,$output);

        //make it a list that orders the ID's by lots exp: 1,2,5,4,3
        $list = implode(',', $output['item']);
        $list = explode(',',$list);
        ////set all the lots

        //for each new lot, change the old lot
        $count=1;
        $file_directory = 'images/btm_uploads/'.$auction_ID.'/';
        foreach($list as $listing){
            $listing = Btmlistings::model()->findByPk($listing);
            $image_count = 1;
            foreach($listing->btmImages as $image){
                $image_extention = explode('.',$image->name);
                $image_extention = $image_extention[1];
                //update database name to new name
                $new_file_name = $count.'_'.$image_count.'.'.$image_extention;
                //rename all images to the new lot #'s with the prefix Temp_
                rename($file_directory.$image->name, $file_directory.'temp_'.$new_file_name);
                $image->name = $new_file_name;
                $image->save();
                $image_count++;
            }
            $listing->lot = $count;
            $listing->save();
            $count++;
        }
        //remove all temp_ from all the images in the auction directory
        $files = array_diff(scandir($file_directory), array('..', '.'));
        foreach($files as $file) {
            $file_name = $file_directory ."". $file;
            $newName = str_replace("temp_","",$file_name);
            rename($file_name, $newName);
        }
    }

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Btmauctions');
		$this->render('admin',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Btmauctions('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Btmauctions']))
			$model->attributes=$_GET['Btmauctions'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Btmauctions the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Btmauctions::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Btmauctions $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='btm-auctions-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    /**
     * Creates an csv file of the auction's lots
     * */
    public function actionExport_lots($id){
        Yii::import('protected/components/ECSVExport');
        $auction = Btmauctions::model()->findByPk($id);
        $listings = $auction->btmListings;
        // for use with array of arrays
        $data = $listings;
        $filename = 'last_lot_export.csv';
        $csv = new ECSVExport($data);
        $csv->toCSV($filename); // returns string by default
        Yii::app()->getRequest()->sendFile( $auction->name.'_lots.csv' , file_get_contents( $filename ) );
    }


    /**
    * Zips the images in a file for the auction and exports it
     */
    public function actionExport_images($id){
        Yii::app()->getRequest()->sendFile($id.'.zip', file_get_contents($this->zipfile($id)));
    }

    public function zipfile($id){
        Yii::import('protected/components/Zipper');
        $dir = 'images/btm_uploads/'.$id;
        $zipper = new Zipper;

        //get all files from a folder
        $files = scandir($dir);
        //loop through the files and add them to zip
        foreach($files as $file){
            if($file != '.' && $file != '..'){
                $zipper->add( $dir.'/'.$file );
            }

        }
        $zipper->store('images/btm_uploads/'.$id.'.zip');
        return ('images/btm_uploads/'.$id.'.zip');
    }
}
