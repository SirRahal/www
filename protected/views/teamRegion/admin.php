<?php
/* @var $this TeamRegionController */
/* @var $model TeamRegion */

$this->breadcrumbs=array(
	'Team Regions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TeamRegion', 'url'=>array('index')),
	array('label'=>'Create TeamRegion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#team-region-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Team Regions</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'team-region-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'team_ID',
		'tournament_ID',
		'seed',
		'overall_seed',
		'starting_placement',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
