<?php
/* @var $this TournamentResultsController */
/* @var $model TournamentResults */

$this->breadcrumbs=array(
	'Tournament Results'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TournamentResults', 'url'=>array('index')),
	array('label'=>'Manage TournamentResults', 'url'=>array('admin')),
);
?>

<h1>Create TournamentResults</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>