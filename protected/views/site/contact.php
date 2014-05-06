<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>
<style>
    .contact_box{
        position: absolute;
        margin-left: 550px;
        Margin-top:-100px;
        padding:10px 10px 0px 10px;
        background: #eaeae3;
        border-radius: 10px;
    }
    .first_col{
        width:60px;
    }
</style>

<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>
<div style="width:50%;">
    <p>
    If you have business inquiries or other questions, please fill out the following form to contact us or give us a call.  <br/>Thank you.
    </p>
</div>
    <div class="contact_box">
        <h3>Company Hours</h3>
        Monday - Friday 8am-5pm EST<br/><br/>
        <h3>Company Information</h3>
        <table>
            <tr>
                <td class="first_col">Phone</td>
                <td>(616) 259-9110</td>
            </tr>
            <tr>
                <td>Fax</td>
                <td>(616) 570-0661</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>1930 Fuller Avenue Suite B<br/>Grand Rapids, MI 49505</td>
            </tr>
        </table>
        <h3>Sales & Marketing</h3>
        <table>
            <tr>
                <td class="first_col">Contact</td>
                <td>JoAnn Holland</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>(616) 259-9108</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>Joann@industrialtimesinc.com</td>
            </tr>

        </table>
        <h3>Design & Proofing</h3>
        <table>
            <tr>
                <td class="first_col">Contact</td>
                <td>Derek Smith</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>(616) 259-9109</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>Derek@industrialtimesinc.com</td>
            </tr>
        </table>
        <h3>Website Administrator</h3>
        <table>
            <tr>
                <td class="first_col">Contact</td>
                <td>Sari Rahal</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>(616) 259-9126</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>Admin@industrialtimesinc.com</td>
            </tr>
        </table>
    </div>
    <div class="clear"></div>
<div class="form">

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
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>