<?php
/* @var $this CustomersController */
/* @var $model Customers */
/* @var $form CActiveForm */
?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div style="width:50%; float: left;">
        <div class="row">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'name'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'l_name'); ?>
            <?php echo $form->textField($model,'l_name',array('size'=>50,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'l_name'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php echo $form->emailField($model,'email',array('size'=>50,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'company'); ?>
            <?php echo $form->textField($model,'company',array('size'=>50,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'company'); ?>
        </div>
    </div>
    <div style="width:30%; float: left; margin-left: 30px;">
        <div class="row">
            <?php echo $form->labelEx($model,'city'); ?>
            <?php echo $form->textField($model,'city',array('size'=>40,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'city'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'state'); ?>
            <?php echo $form->dropDownList($model,'state',array('status'=>'--',
                'AL'=>'AL'
            ,'AK'=>'AK'
            ,'AZ'=>'AZ'
            ,'AR'=>'AR'
            ,'CA'=>'CA'
            ,'CO'=>'CO'
            ,'CT'=>'CT'
            ,'DE'=>'DE'
            ,'DC'=>'DC'
            ,'FL'=>'FL'
            ,'GA'=>'GA'
            ,'HI'=>'HI'
            ,'ID'=>'ID'
            ,'IL'=>'IL'
            ,'IN'=>'IN'
            ,'IA'=>'IA'
            ,'KS'=>'KS'
            ,'KY'=>'KY'
            ,'LA'=>'LA'
            ,'ME'=>'ME'
            ,'MD'=>'MD'
            ,'MA'=>'MA'
            ,'MI'=>'MI'
            ,'MN'=>'MN'
            ,'MS'=>'MS'
            ,'MO'=>'MO'
            ,'MT'=>'MT'
            ,'NE'=>'NE'
            ,'NV'=>'NV'
            ,'NH'=>'NH'
            ,'NJ'=>'NJ'
            ,'NM'=>'NM'
            ,'NY'=>'NY'
            ,'NC'=>'NC'
            ,'ND'=>'ND'
            ,'OH'=>'OH'
            ,'OK'=>'OK'
            ,'OR'=>'OR'
            ,'PA'=>'PA'
            ,'RI'=>'RI'
            ,'SC'=>'SC'
            ,'SD'=>'SD'
            ,'TN'=>'TN'
            ,'TX'=>'TX'
            ,'UT'=>'UT'
            ,'VT'=>'VT'
            ,'VA'=>'VA'
            ,'WA'=>'WA'
            ,'WV'=>'WV'
            ,'WI'=>'WI'
            ,'WY'=>'WY'
            )); ?>

            <?php echo $form->error($model,'state'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'zip'); ?>
            <?php echo $form->textField($model,'zip'); ?>
            <?php echo $form->error($model,'zip'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'phone'); ?>
            <?php echo $form->textField($model,'phone',array('size'=>16,'maxlength'=>16)); ?>
            <?php echo $form->error($model,'phone'); ?>
        </div>



        <div class="row">
            <?php echo $form->hiddenField($model,'signed_up',array('value'=> date('m/d/y',time()), )); ?>
            <?php echo $form->error($model,'signed_up'); ?>
        </div>
    </div >

<div class="clear"></div>




	<div class="row">
        <div style="float: left; padding-right: 5px;">
            <?php echo $form->checkBox($model,'subscribed', array('checked'=>'checked', 'required'=>'required')); ?>
        </div>
        <?php echo $form->labelEx($model,'subscribed'); ?>
		<?php echo $form->error($model,'subscribed'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->