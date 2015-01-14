<?php
/* @var $this BtmListingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Btm Listings',
);

$this->menu=array(
	array('label'=>'Create BtmListings', 'url'=>array('create')),
	array('label'=>'Manage BtmListings', 'url'=>array('admin')),
);
?>

<h1>Btm Listings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
