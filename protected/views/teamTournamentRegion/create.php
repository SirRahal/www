<?php
/* @var $this TeamTournamentRegionController */
/* @var $model TeamTournamentRegion */

$this->breadcrumbs=array(
	'Team Tournament Regions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TeamTournamentRegion', 'url'=>array('index')),
	array('label'=>'Manage TeamTournamentRegion', 'url'=>array('admin')),
);
?>

<h1>Create TeamTournamentRegion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>