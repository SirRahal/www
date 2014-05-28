<?php
/* @var $this TicketController */
/* @var $data Ticket */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_ID')); ?>:</b>
	<?php echo CHtml::encode($data->user_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tournament_region_ID')); ?>:</b>
	<?php echo CHtml::encode($data->tournament_region_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />


</div>