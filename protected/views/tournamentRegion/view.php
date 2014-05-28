<?php
/* @var $this TournamentRegionController */
/* @var $model TournamentRegion */

$this->breadcrumbs=array(
	'Tournament Regions'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List TournamentRegion', 'url'=>array('index')),
	array('label'=>'Create TournamentRegion', 'url'=>array('create')),
	array('label'=>'Update TournamentRegion', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete TournamentRegion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TournamentRegion', 'url'=>array('admin')),
);
?>

<h1>View TournamentRegion #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'tournament_ID',
		'region_ID',
	),
)); ?>
