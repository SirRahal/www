<?php
/* @var $this TicketController */
/* @var $model Ticket */

$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);


?>

<h1>Edit My Picks # <i><?php echo $model->code; ?></i></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>