<?php
/* @var $this BtmAuctionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Btm Auctions',
);

$this->menu=array(
	array('label'=>'Create BtmAuctions', 'url'=>array('create')),
	array('label'=>'Manage BtmAuctions', 'url'=>array('admin')),
);
?>

<h1>Btm Auctions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
