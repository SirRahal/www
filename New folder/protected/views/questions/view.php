<?php
/* @var $this QuestionsController */
/* @var $model Questions */

$this->breadcrumbs=array(
	'Questions'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Questions', 'url'=>array('index')),
	array('label'=>'Create Questions', 'url'=>array('create')),
	array('label'=>'Update Questions', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Questions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Questions', 'url'=>array('admin')),
);
?>

<h1>View Questions #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'question',
		'answer',
		'category',
	),
)); ?>
