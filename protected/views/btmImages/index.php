<?php
/* @var $this BtmimagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Btm Images',
);

$this->menu=array(
	array('label'=>'Create Btmimages', 'url'=>array('create')),
	array('label'=>'Manage Btmimages', 'url'=>array('admin')),
);
?>

<h1>Btm Images</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
