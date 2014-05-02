<?php
/* @var $this AuctionsController */
/* @var $model Auctions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'auctions-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>



	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
        <?php
        $role_list = CHtml::listData(Auctioneer::model()->findAll(), 'auctioneer', 'auctioneer');
        $options = array(
            'tabindex' => '0',
            'empty' => '(Select a Company)',
        );
        ?>
        <?php echo $form->dropDownList($model,'company', $role_list, $options); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'company_ID'); ?>
        <?php echo $form->textField($model,'company_ID'); ?>
        <?php echo $form->error($model,'company_ID'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'info'); ?>
		<?php echo $form->textField($model,'info',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clicks'); ?>
		<?php echo $form->textField($model,'clicks'); ?>
		<?php echo $form->error($model,'clicks'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->



