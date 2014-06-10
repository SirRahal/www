<?php
/* @var $this TeamRegionController */
/* @var $model TeamRegion */

$this->breadcrumbs=array(
	'Team Regions'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List TeamRegion', 'url'=>array('index')),
	array('label'=>'Create TeamRegion', 'url'=>array('create')),
	array('label'=>'Update TeamRegion', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete TeamRegion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TeamRegion', 'url'=>array('admin')),
);
?>

<h1>View TeamRegion #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'team_ID',
		'tournament_ID',
		'seed',
		'overall_seed',
		'starting_placement',
	),
)); ?>
