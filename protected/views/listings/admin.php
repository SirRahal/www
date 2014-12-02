<?php
/* @var $this ListingsController */
/* @var $model Listings */

$this->breadcrumbs=array(
	'Listings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Listings', 'url'=>array('index')),
	array('label'=>'Create Listings', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#listings-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Listings</h1>

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
	'id'=>'listings-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'list_by',
		'date',
		'photo_numbers',
		'description',
		'internal_number',
		/*
		'price',
		'manufacturer',
		'serial_number',
		'model_number',
		'more_info',
		'condition',
		'condition_info',
		'weight',
		'length_1',
		'width_1',
		'height_1',
		'dims_2',
		'length_2',
		'width_2',
		'height_2',
		'listing_note',
		'ebay_listed',
		'ebay_lister',
		'ebay_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
