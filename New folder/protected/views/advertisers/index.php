<?php
/* @var $this AdvertisersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Advertisers',
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'Create Advertisers', 'url'=>array('create')),
	array('label'=>'Manage Advertisers', 'url'=>array('admin')),
);}
?>

<h1>Advertisers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
