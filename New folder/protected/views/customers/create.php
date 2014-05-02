<?php
/* @var $this CustomersController */
/* @var $model Customers */

$this->breadcrumbs=array(
	'Email Sign Up',
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'List Customers', 'url'=>array('index')),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
);}
?>

<h1>Email Sign Up</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>