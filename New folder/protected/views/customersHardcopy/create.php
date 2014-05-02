<?php
/* @var $this CustomersHardcopyController */
/* @var $model CustomersHardcopy */

$this->breadcrumbs=array(
	'Hard Copy Sign Up',
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'List CustomersHardcopy', 'url'=>array('index')),
	array('label'=>'Manage CustomersHardcopy', 'url'=>array('admin')),
);}
?>

<h1>Hard Copy Sign Up</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>