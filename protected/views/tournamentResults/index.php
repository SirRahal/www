<?php
/* @var $this TournamentResultsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tournament Results',
);

$this->menu=array(
	array('label'=>'Create TournamentResults', 'url'=>array('create')),
	array('label'=>'Manage TournamentResults', 'url'=>array('admin')),
);
?>

<h1>Tournament Results</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
