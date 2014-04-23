<?php
/* @var $this QuestionsController */
/* @var $data Questions */
?>

<div class="view">

	<!--<b><?php /*echo CHtml::encode($data->getAttributeLabel('ID')); */?>:</b>
	<?php /*echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); */?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('question')); ?>:</b>
	<?php echo CHtml::encode($data->question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer')); ?>:</b>
	<?php echo CHtml::encode($data->answer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />


</div>