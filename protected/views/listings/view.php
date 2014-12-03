<?php
/* @var $this ListingsController */
/* @var $model Listings */

$this->breadcrumbs=array(
	'Listings'=>array('admin'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'Create Another Listings', 'url'=>array('create')),
	array('label'=>'Update Listings', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Listings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Listings #<?php echo $model->ID ; ?></h1>
<h3>Listed by <?php echo $model->listBy['first_name']; ?> On <?php echo $model->date; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'inventory',
		'photo_numbers',
		'description',
		'internal_number',
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
	),
)); ?>
<style>
    tbody{
        color:black;
    }
</style>
