<?php
/* @var $this TicketController */
/* @var $model Ticket */

$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);


?>

<h1>Edit My Entry # <i><?php echo $model->code; ?></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is the 2014 Tournament for example purposes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>