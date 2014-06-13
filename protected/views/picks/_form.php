<?php
/* @var $this PicksController */
/* @var $model Picks */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'picks-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ticket_ID'); ?>
		<?php echo $form->textField($model,'ticket_ID'); ?>
		<?php echo $form->error($model,'ticket_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team_ID'); ?>
		<?php echo $form->textField($model,'team_ID'); ?>
		<?php echo $form->error($model,'team_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->