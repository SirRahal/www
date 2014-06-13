<?php
/* @var $this PicksController */
/* @var $model Picks */
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

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->