<?php
/* @var $this AuctionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Auctions',
);

$this->menu=array(
	array('label'=>'Create Auctions', 'url'=>array('create')),
	array('label'=>'Manage Auctions', 'url'=>array('admin')),
);
?>

<h1>Auctions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
