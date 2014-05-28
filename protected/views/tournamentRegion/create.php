<?php
/* @var $this TournamentRegionController */
/* @var $model TournamentRegion */

$this->breadcrumbs=array(
	'Tournament Regions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TournamentRegion', 'url'=>array('index')),
	array('label'=>'Manage TournamentRegion', 'url'=>array('admin')),
);
?>

<h1>Create TournamentRegion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>