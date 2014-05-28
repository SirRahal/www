<?php
/* @var $this TournamentRegionController */
/* @var $data TournamentRegion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tournament_ID')); ?>:</b>
	<?php echo CHtml::encode($data->tournament_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('region_ID')); ?>:</b>
	<?php echo CHtml::encode($data->region_ID); ?>
	<br />


</div>