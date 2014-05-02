<?php
/* @var $this IssuesController */
/* @var $model Issues */

$this->breadcrumbs=array(
	'Issues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Issues', 'url'=>array('index')),
	array('label'=>'Manage Issues', 'url'=>array('admin')),
);
?>

<h1>Create Issues</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>