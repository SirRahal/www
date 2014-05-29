<?php
/* @var $this GameController */
/* @var $model Game */
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
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time'); ?>
		<?php echo $form->textField($model,'time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team_1_ID'); ?>
		<?php echo $form->textField($model,'team_1_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team_2_ID'); ?>
		<?php echo $form->textField($model,'team_2_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team_1_score'); ?>
		<?php echo $form->textField($model,'team_1_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team_2_score'); ?>
		<?php echo $form->textField($model,'team_2_score'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->