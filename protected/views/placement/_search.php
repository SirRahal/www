<?php
/* @var $this PlacementController */
/* @var $model Placement */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ticket_ID'); ?>
		<?php echo $form->textField($model,'ticket_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team_ID'); ?>
		<?php echo $form->textField($model,'team_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'placement'); ?>
		<?php echo $form->textField($model,'placement'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->