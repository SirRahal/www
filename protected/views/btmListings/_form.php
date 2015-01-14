<?php
/* @var $this BtmListingsController */
/* @var $model BtmListings */
/* @var $form CActiveForm */
?>

<div class="form">

<?php
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'btm-listings-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
));

/*If it is a copy*/
$url = $_SERVER['REQUEST_URI'];
if( strpos( $url, 'create/' ) !== false ) {
    $exploded_url = explode('/',$url);
    $auction_ID = end($exploded_url);
    $auction = BtmAuctions::model()->findByPk($auction_ID);
    $list_count = count($auction->btmListings);
    $lot = $list_count+1;
}else{
    $auction_ID = $model->auction_ID;
    $lot = $model->lot;
}
?>

    <style>
        input,textarea,select{
            color: #000000;
            padding-left: 5px;
        }
    </style>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="visibility_none">
		<?php echo $form->labelEx($model,'auction_ID'); ?>
		<?php echo $form->textField($model,'auction_ID',array('value'=>$auction_ID)); ?>
		<?php echo $form->error($model,'auction_ID'); ?>
	</div>

	<div class="visibility_none">
		<?php echo $form->labelEx($model,'lot'); ?>
		<?php echo $form->textField($model,'lot',array('size'=>10,'maxlength'=>10,'value'=>$lot)); ?>
		<?php echo $form->error($model,'lot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manufacturer'); ?>
		<?php echo $form->textField($model,'manufacturer',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'manufacturer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'more_info'); ?>
		<?php echo $form->textField($model,'more_info',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'more_info'); ?>
	</div>



    <?php

    $role_list = array('0 - No Condition','1 - Very Poor', '2 - Poor','3 - Fair','4 - Good','5 - Like New');
    $options = array(
        'tabindex' => '0',
        'empty' => '(Select Condition)',
    );
    ?>

    <div class="row">
        <?php echo $form->labelEx($model,'condition'); ?>
        <?php echo $form->dropDownList($model,'condition',$role_list, $options); ?>
        <?php echo $form->error($model,'condition'); ?>
    </div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->