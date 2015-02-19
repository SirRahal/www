<?php
/* @var $this BtmlistingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Btm Listings',
);


?>

<h1>Btm Listings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
