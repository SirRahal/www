<?php
/* @var $this ListingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Listings',
);
?>

<h1>Listings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
