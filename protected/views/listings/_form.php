<?php
/* @var $this ListingsController */
/* @var $model Listings */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $user_ID = User::model()->get_user_ID();
    if (isset($model)){
        $date = $model->date;
    }
        $date = date("d-m-y");
    ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'listings-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="visibility_none">
		<?php echo $form->labelEx($model,'list_by'); ?>
		<?php echo $form->textField($model,'list_by',array('value'=>$user_ID)); ?>
		<?php echo $form->error($model,'list_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inventory'); ?>
		<?php echo $form->textField($model,'inventory',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'inventory'); ?>
	</div>

	<div class="visibility_none">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('value'=>$date)); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo_numbers'); ?>
		<?php echo $form->textField($model,'photo_numbers',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'photo_numbers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'internal_number'); ?>
		<?php echo $form->textField($model,'internal_number',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'internal_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manufacturer'); ?>
		<?php echo $form->textField($model,'manufacturer',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'manufacturer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serial_number'); ?>
		<?php echo $form->textField($model,'serial_number',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'serial_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'model_number'); ?>
		<?php echo $form->textField($model,'model_number',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'model_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'more_info'); ?>
		<?php echo $form->textField($model,'more_info',array('size'=>60,'maxlength'=>1500)); ?>
		<?php echo $form->error($model,'more_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'condition'); ?>
		<?php echo $form->textField($model,'condition'); ?>
		<?php echo $form->error($model,'condition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'condition_info'); ?>
		<?php echo $form->textField($model,'condition_info',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'condition_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'length_1'); ?>
		<?php echo $form->textField($model,'length_1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'length_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'width_1'); ?>
		<?php echo $form->textField($model,'width_1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'width_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'height_1'); ?>
		<?php echo $form->textField($model,'height_1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'height_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dims_2'); ?>
		<?php echo $form->textField($model,'dims_2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'dims_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'length_2'); ?>
		<?php echo $form->textField($model,'length_2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'length_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'width_2'); ?>
		<?php echo $form->textField($model,'width_2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'width_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'height_2'); ?>
		<?php echo $form->textField($model,'height_2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'height_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listing_note'); ?>
		<?php echo $form->textField($model,'listing_note',array('size'=>60,'maxlength'=>1500)); ?>
		<?php echo $form->error($model,'listing_note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ebay_listed'); ?>
		<?php echo $form->textField($model,'ebay_listed'); ?>
		<?php echo $form->error($model,'ebay_listed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ebay_lister'); ?>
		<?php echo $form->textField($model,'ebay_lister'); ?>
		<?php echo $form->error($model,'ebay_lister'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ebay_date'); ?>
		<?php echo $form->textField($model,'ebay_date'); ?>
		<?php echo $form->error($model,'ebay_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->