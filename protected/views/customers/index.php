<?php
/* @var $this CustomersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customers',
);

$this->menu=array(
	array('label'=>'Create Customers', 'url'=>array('create')),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
);
?>

<h1>Customers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
