<?php
/* @var $this ListingsController */
/* @var $model Listings */

$this->breadcrumbs=array(
    'Listings'=>array('admin'),
    'Create',
);


?>

    <h1>Create Manual Listings</h1>

<?php $this->renderPartial('_manual_form', array('model'=>$model)); ?>