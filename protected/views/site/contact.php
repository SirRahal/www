<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>
<style>
    .floatL{
        float: left;
        padding:10px;
    }
</style>

    <div style="padding:10px;">
        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
        </p>

        <div class="form">

            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'contact-form',
                'enableClientValidation'=>true,
                'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                ),
            )); ?>

            <p class="note">Fields with <span class="required">*</span> are required.</p>
        <div class="floatL">
            <?php echo $form->errorSummary($model); ?>

            <div class="row">
                <?php echo $form->labelEx($model,'name'); ?><br/>
                <?php echo $form->textField($model,'name'); ?>
                <?php echo $form->error($model,'name'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'email'); ?><br/>
                <?php echo $form->textField($model,'email'); ?>
                <?php echo $form->error($model,'email'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'subject'); ?><br/>
                <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
                <?php echo $form->error($model,'subject'); ?>
            </div>


        </div>
        <div class="floatL">
            <div class="row" style="width:100%;">
                <?php echo $form->labelEx($model,'body'); ?><br/>
                <?php echo $form->textArea($model,'body',array('rows'=>10, 'cols'=>70)); ?>
                <?php echo $form->error($model,'body'); ?>
            </div>

            <?php endif; ?>
        </div>
        <div class="floatL">
            <div style="background: white; width: 280px; padding:5px; border-radius:10px; margin-top: 20px; border: solid 1px #acacac;">
                <?php if(CCaptcha::checkRequirements()): ?>
                <div class="row">
                    <?php echo $form->labelEx($model,'verifyCode'); ?><span class="required">*</span><br/>
                    <div>
                        <?php $this->widget('CCaptcha'); ?><br/>
                        <?php echo $form->textField($model,'verifyCode'); ?><br/>
                    </div>
                    <div>Please enter the letters as they are shown in the image above.
                        <br/>Letters are not case-sensitive.</div>
                    <?php echo $form->error($model,'verifyCode'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit', array('class' => 'ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
