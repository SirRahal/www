<?php
/* @var $this TicketController */
/* @var $model Ticket */

$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Ticket', 'url'=>array('index')),
	array('label'=>'Create Ticket', 'url'=>array('create')),
	array('label'=>'Update Ticket', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Ticket', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ticket', 'url'=>array('admin')),
);
?>
<?php echo
'id = ' .$_GET['id']. ', AND ownsTicket returned : '.
 User::model()->ownsTicket(Yii::app()->user->id,$_GET['id']);
?>
<h1>View Ticket #<?php echo $model->ID; ?></h1>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'user_ID',
		'tournament_ID',
		'code',
	),
)); ?>
