<?php
/* @var $this CustomersHardcopyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customers Hardcopies',
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'Create CustomersHardcopy', 'url'=>array('create')),
	array('label'=>'Manage CustomersHardcopy', 'url'=>array('admin')),
);}
?>

<h1>Customers Hardcopies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
