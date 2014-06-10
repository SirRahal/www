<?php
/* @var $this SchoolController */
/* @var $model School */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List School', 'url'=>array('index')),
	array('label'=>'Manage School', 'url'=>array('admin')),
);
?>

<h1>Create School</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>