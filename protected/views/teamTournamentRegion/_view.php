<?php
/* @var $this TeamTournamentRegionController */
/* @var $data TeamTournamentRegion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_ID')); ?>:</b>
	<?php echo CHtml::encode($data->team_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tournament_region_ID')); ?>:</b>
	<?php echo CHtml::encode($data->tournament_region_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seed')); ?>:</b>
	<?php echo CHtml::encode($data->seed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overall_seed')); ?>:</b>
	<?php echo CHtml::encode($data->overall_seed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('starting_placement')); ?>:</b>
	<?php echo CHtml::encode($data->starting_placement); ?>
	<br />


</div>