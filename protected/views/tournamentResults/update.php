<?php
/* @var $this TournamentResultsController */
/* @var $model TournamentResults */

$this->breadcrumbs=array(
	'Tournament Results'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TournamentResults', 'url'=>array('index')),
	array('label'=>'Create TournamentResults', 'url'=>array('create')),
	array('label'=>'View TournamentResults', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage TournamentResults', 'url'=>array('admin')),
);
?>

<h1>Update TournamentResults <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>