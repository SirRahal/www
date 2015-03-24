<?php
/* @var $this TeamController */
/* @var $model Team */

$this->breadcrumbs=array(
	'Teams'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Team', 'url'=>array('index')),
	array('label'=>'Create Team', 'url'=>array('create')),
	array('label'=>'Update Team', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Team', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Team', 'url'=>array('admin')),
);
?>

<h1>View Team #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'ID',
        'name',
        'logo',
    ),
)); ?>
