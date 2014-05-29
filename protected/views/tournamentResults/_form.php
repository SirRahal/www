<?php
/* @var $this TournamentResultsController */
/* @var $model TournamentResults */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tournament-results-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team_tournament_region_ID'); ?>
		<?php echo $form->textField($model,'team_tournament_region_ID'); ?>
		<?php echo $form->error($model,'team_tournament_region_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'placement'); ?>
		<?php echo $form->textField($model,'placement'); ?>
		<?php echo $form->error($model,'placement'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->