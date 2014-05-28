<?php
/* @var $this TournamentRegionController */
/* @var $model TournamentRegion */
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
		<?php echo $form->label($model,'tournament_ID'); ?>
		<?php echo $form->textField($model,'tournament_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'region_ID'); ?>
		<?php echo $form->textField($model,'region_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->