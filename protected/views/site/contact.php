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
        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
        </p>
        <div class="contact_container">
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

                <div>
                    <div class="round_edges" style="background: white; padding:5px; margin-top: 20px; border: solid 1px #acacac;">
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
                <br/>
                <div class="row buttons">
                    <?php echo CHtml::submitButton('Submit', array('class' => 'ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only')); ?>
                </div>

                <?php $this->endWidget(); ?>

            </div><!-- form -->
            </div>
        </div>
        <div class="contact_container">
            <div class="align_center round_edges shadow orange_boarder" style="padding-top: 10px;">
                <h1>For more information,<br/>please contact us by email or by phone.</h1>
                <h1>For Sales</h1>
                <p>Sales@BracketFanatic.com<br/>Some Default Number</p>
                <h1>For Support</h1>
                <p>Support@BracketFanatic.com<br/>Some Default Number</p>
                <h1>Direct Contacts</h1>
                <!--<div class="contact">
                    <img class="contact_image" src="/images/joe_sack.png"/>
                    <p><b><h3>Joe Sack</h3></b>Joe@BracketFanatic.com<br/>Some Default Number</p>
                </div>
                <div class="clear"></div>
                <div class="contact">
                    <img class="contact_image" src="/images/glen_goen.jpg"/>
                    <p><b><h3>Glen Goen</h3></b>Glen@BracketFanatic.com<br/>Some Default Number</p>
                </div>
                <div class="clear"></div>
                <div class="contact">
                    <img class="contact_image" src="/images/no_pic.jpg"/>
                    <p><b><h3>Dave Ingles</h3></b>Dave@BracketFanatic.com<br/>Some Default Number</p>
                </div>
                <div class="clear"></div>
                <div class="contact">
                    <img class="contact_image" src="/images/no_pic.jpg"/>
                    <p><b><h3>Pat Wagneer</h3></b>Pat@BracketFanatic.com<br/>Some Default Number</p>
                </div>
                <div class="clear"></div>
                <div class="contact">
                    <img class="contact_image" src="/images/sari_rahal.jpg"/>
                    <p><b><h3>Sari Rahal</h3></b>Sari@BracketFanatic.com<br/>Some Default Number</p>
                </div>
                All Contacts are reachable 9am-5pm EST.-->
            </div>
        </div>






<?php endif; ?>
<div class="clear"></div>
