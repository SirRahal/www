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

	<b><?php echo CHtml::encode($data->getAttributeLabel('tournament_ID')); ?>:</b>
	<?php echo CHtml::encode($data->tournament_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rd_1')); ?>:</b>
	<?php echo CHtml::encode($data->rd_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rd_2')); ?>:</b>
	<?php echo CHtml::encode($data->rd_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rd_3')); ?>:</b>
	<?php echo CHtml::encode($data->rd_3); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('rd_4')); ?>:</b>
	<?php echo CHtml::encode($data->rd_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rd_5')); ?>:</b>
	<?php echo CHtml::encode($data->rd_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_points')); ?>:</b>
	<?php echo CHtml::encode($data->total_points); ?>
	<br />

	*/ ?>

</div>