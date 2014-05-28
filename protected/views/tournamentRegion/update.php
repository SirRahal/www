<?php
/* @var $this TournamentRegionController */
/* @var $model TournamentRegion */

$this->breadcrumbs=array(
	'Tournament Regions'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TournamentRegion', 'url'=>array('index')),
	array('label'=>'Create TournamentRegion', 'url'=>array('create')),
	array('label'=>'View TournamentRegion', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage TournamentRegion', 'url'=>array('admin')),
);
?>

<h1>Update TournamentRegion <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>