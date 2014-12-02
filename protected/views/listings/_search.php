<?php
/* @var $this ListingsController */
/* @var $model Listings */
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
		<?php echo $form->label($model,'list_by'); ?>
		<?php echo $form->textField($model,'list_by',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inventory'); ?>
		<?php echo $form->textField($model,'inventory',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photo_numbers'); ?>
		<?php echo $form->textField($model,'photo_numbers',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'internal_number'); ?>
		<?php echo $form->textField($model,'internal_number',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manufacturer'); ?>
		<?php echo $form->textField($model,'manufacturer',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serial_number'); ?>
		<?php echo $form->textField($model,'serial_number',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'model_number'); ?>
		<?php echo $form->textField($model,'model_number',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'more_info'); ?>
		<?php echo $form->textField($model,'more_info',array('size'=>60,'maxlength'=>1500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'condition'); ?>
		<?php echo $form->textField($model,'condition'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'condition_info'); ?>
		<?php echo $form->textField($model,'condition_info',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weight'); ?>
		<?php echo $form->textField($model,'weight',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'length_1'); ?>
		<?php echo $form->textField($model,'length_1',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'width_1'); ?>
		<?php echo $form->textField($model,'width_1',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'height_1'); ?>
		<?php echo $form->textField($model,'height_1',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dims_2'); ?>
		<?php echo $form->textField($model,'dims_2',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'length_2'); ?>
		<?php echo $form->textField($model,'length_2',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'width_2'); ?>
		<?php echo $form->textField($model,'width_2',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'height_2'); ?>
		<?php echo $form->textField($model,'height_2',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'listing_note'); ?>
		<?php echo $form->textField($model,'listing_note',array('size'=>60,'maxlength'=>1500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ebay_listed'); ?>
		<?php echo $form->textField($model,'ebay_listed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ebay_lister'); ?>
		<?php echo $form->textField($model,'ebay_lister',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ebay_date'); ?>
		<?php echo $form->textField($model,'ebay_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->