<?php
/* @var $this BtmImagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Btm Images',
);

$this->menu=array(
	array('label'=>'Create BtmImages', 'url'=>array('create')),
	array('label'=>'Manage BtmImages', 'url'=>array('admin')),
);
?>

<h1>Btm Images</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
