<?php
/* @var $this BtmimagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Btm Images',
);

?>

<h1>Btm Images</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
