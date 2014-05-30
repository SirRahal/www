<?php
/* @var $this TeamTournamentRegionController */
/* @var $model TeamTournamentRegion */

$this->breadcrumbs=array(
	'Team Tournament Regions'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List TeamTournamentRegion', 'url'=>array('index')),
	array('label'=>'Create TeamTournamentRegion', 'url'=>array('create')),
	array('label'=>'Update TeamTournamentRegion', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete TeamTournamentRegion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TeamTournamentRegion', 'url'=>array('admin')),
);
?>

<h1>View TeamTournamentRegion #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'team_ID',
		'tournament_region_ID',
		'seed',
		'overall_seed',
		'starting_placement',
	),
)); ?>
