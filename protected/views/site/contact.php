<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<div class="main_title"><h1>Contact Us</h1></div>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>
<style>
    .contact{
        border: solid 1px orange;
        background-color: #f48a0d;
        background-image: -webkit-gradient(linear, right top, left bottom, from(#f4890b), to(#f9f1e0));
        background-image: -webkit-linear-gradient(right, #f4890b, #f9f1e0);
        background-image:    -moz-linear-gradient(right, #f4890b, #f9f1e0);
        background-image:     -ms-linear-gradient(right, #f4890b, #f9f1e0);
        background-image:      -o-linear-gradient(right, #f4890b, #f9f1e0);
        border-bottom: solid 1px black;
    }

</style>

    <div style="padding:10px;">
        <div class="mobile_container">

            <div class="align_center round_edges shadow orange_boarder" style="padding-top: 10px; margin-bottom: 50px;">
                <h1>For more information,<br/>please contact us by email or by phone.</h1>
                <h1>For Sales and Support</h1>
                <h4>Joe@BracketFanatic.com<br/>(616)-262-9270</h4>
            </div>
        </div>
        <div class="mobile_container mobile_hide">
            <div style="margin-bottom:20px;">If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</div>
            <div class="form" >

                <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'contact-form',
                    'enableClientValidation'=>true,
                    'clientOptions'=>array(
                        'validateOnSubmit'=>true,
                    ),
                )); ?>

                <p class="note">Fields with <span class="required">*</span> are required.</p>

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

                <div class="row" style="width:100%;">
                    <?php echo $form->labelEx($model,'body'); ?><br/>
                    <?php echo $form->textArea($model,'body',array('rows'=>10)); ?>
                    <?php echo $form->error($model,'body'); ?>
                </div>

                <?php endif; ?>


                <div class="round_edges" style="background: white; padding:5px; margin-top: 20px; border: solid 1px #acacac;">
                    <?php if(CCaptcha::checkRequirements()): ?>
                    <div class="row">
                        <?php echo $form->labelEx($model,'verifyCode'); ?>
                        <div>
                            <?php $this->widget('CCaptcha'); ?>
                            <?php echo $form->textField($model,'verifyCode',array('size'=>15)); ?>
                        </div>
                        <div class="hint">Please enter the letters as they are shown in the<br/> image above.
                            Letters are not case-sensitive.</div>
                        <?php echo $form->error($model,'verifyCode'); ?>
                    </div>
                </div>

                <br/>
                <div class="row buttons">
                    <?php echo CHtml::submitButton('Submit', array('class' => 'ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only')); ?>
                </div>

                <?php $this->endWidget(); ?>

            </div><!-- form -->
        </div>
    </div>







<?php endif; ?>
<div class="clear"></div>
