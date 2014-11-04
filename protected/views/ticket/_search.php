<?php
/* @var $this TicketController */
/* @var $model Ticket */
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
		<?php echo $form->label($model,'user_ID'); ?>
		<?php echo $form->textField($model,'user_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tournament_ID'); ?>
		<?php echo $form->textField($model,'tournament_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rd_1'); ?>
		<?php echo $form->textField($model,'rd_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rd_2'); ?>
		<?php echo $form->textField($model,'rd_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rd_3'); ?>
		<?php echo $form->textField($model,'rd_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rd_4'); ?>
		<?php echo $form->textField($model,'rd_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rd_5'); ?>
		<?php echo $form->textField($model,'rd_5'); ?>
	</div>

    <div class="row">
        <?php echo $form->label($model,'rd_6'); ?>
        <?php echo $form->textField($model,'rd_6'); ?>
    </div>

	<div class="row">
		<?php echo $form->label($model,'total_points'); ?>
		<?php echo $form->textField($model,'total_points'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->