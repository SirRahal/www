<?php
/* @var $this TournamentResultsController */
/* @var $model TournamentResults */

$this->breadcrumbs=array(
	'Tournament Results'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List TournamentResults', 'url'=>array('index')),
	array('label'=>'Create TournamentResults', 'url'=>array('create')),
	array('label'=>'Update TournamentResults', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete TournamentResults', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TournamentResults', 'url'=>array('admin')),
);
?>

<h1>View TournamentResults #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'team_tournament_region_ID',
		'placement',
	),
)); ?>
