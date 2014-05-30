<?php
/* @var $this TeamTournamentRegionController */
/* @var $model TeamTournamentRegion */
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
		<?php echo $form->label($model,'team_ID'); ?>
		<?php echo $form->textField($model,'team_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tournament_region_ID'); ?>
		<?php echo $form->textField($model,'tournament_region_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seed'); ?>
		<?php echo $form->textField($model,'seed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'overall_seed'); ?>
		<?php echo $form->textField($model,'overall_seed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'starting_placement'); ?>
		<?php echo $form->textField($model,'starting_placement'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->