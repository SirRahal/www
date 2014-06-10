<?php
/* @var $this GameController */
/* @var $data Game */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tournament_ID')); ?>:</b>
	<?php echo CHtml::encode($data->tournament_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_1_ID')); ?>:</b>
	<?php echo CHtml::encode($data->team_1_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_2_ID')); ?>:</b>
	<?php echo CHtml::encode($data->team_2_ID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('team_1_score')); ?>:</b>
	<?php echo CHtml::encode($data->team_1_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_2_score')); ?>:</b>
	<?php echo CHtml::encode($data->team_2_score); ?>
	<br />

	*/ ?>

</div>