<?php
/* @var $this GameController */
/* @var $model Game */

$this->breadcrumbs=array(
	'Games'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Game', 'url'=>array('index')),
	array('label'=>'Create Game', 'url'=>array('create')),
	array('label'=>'Update Game', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Game', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Game', 'url'=>array('admin')),
);
?>

<h1>View Game #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'tournament_ID',
		'date',
		'time',
		'location',
		'team_1_ID',
		'team_2_ID',
		'team_1_score',
		'team_2_score',
		'round',
	),
)); ?>
