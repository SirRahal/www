<?php
/* @var $this TeamTournamentRegionController */
/* @var $model TeamTournamentRegion */

$this->breadcrumbs=array(
	'Team Tournament Regions'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TeamTournamentRegion', 'url'=>array('index')),
	array('label'=>'Create TeamTournamentRegion', 'url'=>array('create')),
	array('label'=>'View TeamTournamentRegion', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage TeamTournamentRegion', 'url'=>array('admin')),
);
?>

<h1>Update TeamTournamentRegion <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>