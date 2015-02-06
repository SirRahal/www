<?php
/* @var $this ManufacturerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Manufacturers',
);

?>

<h1>Manufacturers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
