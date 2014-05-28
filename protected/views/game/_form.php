<?php
/* @var $this GameController */
/* @var $model Game */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'game-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team_1_ID'); ?>
		<?php echo $form->textField($model,'team_1_ID'); ?>
		<?php echo $form->error($model,'team_1_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team_2_ID'); ?>
		<?php echo $form->textField($model,'team_2_ID'); ?>
		<?php echo $form->error($model,'team_2_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team_1_score'); ?>
		<?php echo $form->textField($model,'team_1_score'); ?>
		<?php echo $form->error($model,'team_1_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team_2_score'); ?>
		<?php echo $form->textField($model,'team_2_score'); ?>
		<?php echo $form->error($model,'team_2_score'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->