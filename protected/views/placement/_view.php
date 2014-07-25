<?php
/* @var $this PlacementController */
/* @var $data Placement */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ticket_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ticket_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_ID')); ?>:</b>
	<?php echo CHtml::encode($data->team_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('placement')); ?>:</b>
	<?php echo CHtml::encode($data->placement); ?>
	<br />


</div>