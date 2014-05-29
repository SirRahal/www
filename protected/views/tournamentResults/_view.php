<?php
/* @var $this TournamentResultsController */
/* @var $data TournamentResults */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_tournament_region_ID')); ?>:</b>
	<?php echo CHtml::encode($data->team_tournament_region_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('placement')); ?>:</b>
	<?php echo CHtml::encode($data->placement); ?>
	<br />


</div>