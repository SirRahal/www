<?php
/* @var $this BtmListingsController */
/* @var $model BtmListings */

$this->breadcrumbs=array(
	'Btm Listings'=>array('index'),
	'Create',
);


?>

<h1>Create BtmListings</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>