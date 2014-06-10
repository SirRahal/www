<?php
/* @var $this TeamTournamentRegionController */
/* @var $model TeamTournamentRegion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'team-tournament-region-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'team_ID'); ?>
		<?php echo $form->textField($model,'team_ID'); ?>
		<?php echo $form->error($model,'team_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tournament_region_ID'); ?>
		<?php echo $form->textField($model,'tournament_region_ID'); ?>
		<?php echo $form->error($model,'tournament_region_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seed'); ?>
		<?php echo $form->textField($model,'seed'); ?>
		<?php echo $form->error($model,'seed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'overall_seed'); ?>
		<?php echo $form->textField($model,'overall_seed'); ?>
		<?php echo $form->error($model,'overall_seed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'starting_placement'); ?>
		<?php echo $form->textField($model,'starting_placement'); ?>
		<?php echo $form->error($model,'starting_placement'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->