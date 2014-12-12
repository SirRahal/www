<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<script>
    function inputFocus(i){
        if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
    }
    function inputBlur(i){
        if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
    }
</script>

<div class="form">

    <?php
    $form=$this->beginWidget('CActiveForm', array(
        'id'=>'user-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>


    <p class="note">Fields with <span class="required">*</span> are required.</p>
    <span>Please fill out and make sure that this information is correct.  If you win, this will be used to contact you.</span>

    <?php echo $form->errorSummary($model); ?>

    <div class="mobile_container">
        <div class="row">
            <?php echo $form->labelEx($model,'first_name'); ?><br/>
            <?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100,'title'=>'Please type carefully, this is whom the checks will be made out to.')); ?>
            <?php echo $form->error($model,'first_name'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'last_name'); ?><br/>
            <?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100,'title'=>'Please type carefully, this is whom the checks will be made out to.')); ?>
            <?php echo $form->error($model,'last_name'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'email'); ?><br/>
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200,'minlength'=>8,'title'=>'These are only used as reminders to Bracket Fanatic, and are not used as distribution', 'placeholder'=>'Someone@BracketFanatic.com')); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>



        <div class="row">
            <?php echo $form->labelEx($model,'user_name'); ?><br/>
            <?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>100,'minlength'=>5,'title'=>'Must be at least 5 characters long.', 'placeholder'=>'JonJackup')); ?>
            <?php echo $form->error($model,'user_name'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'password'); ?><br/>
            <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100,'minlength'=>5,'title'=>'Must be at least 5 characters long.')); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>
    </div>

    <div class="mobile_container">

        <div class="row">
            <?php echo $form->labelEx($model,'city'); ?><br/>
            <?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'city'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'state'); ?><br/>
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
            <?php echo $form->labelEx($model,'zip'); ?><br/>
            <?php echo $form->textField($model,'zip',array('size'=>8,'maxlength'=>8)); ?>
            <?php echo $form->error($model,'zip'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'phone'); ?><br/>
            <?php echo $form->textField($model,'phone',array('size'=>18,'maxlength'=>18, 'placeholder'=>'1(555)-555-5555')); ?>
            <?php echo $form->error($model,'phone'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'terms'); ?><br/>
            <div class="terms">
                These are the terms and conditions to this game.  If you don't like them you can pack up your stuff and get out.  We don't take
                everything you say literal..  this is just really long text to make it look like the terms and conditions to this game.  If anyong
                is reading this i will be really surprised and if you are, you are catching all of the spelling mistakes because i am just writing
                off the top of my head and nothing else.  I think this text took me less than a min to write.  Well not any more.  Now it's more
                2 min because i still havn't stoped typeing.  Joe Sack if you see this, that means you still havn't given me the terms and conditions
                and this is your fault.  Thank you for reading.  I'm Out SirRahal
            </div>
            <?php echo $form->checkBox($model,'terms'); ?>
            <div style=" maargin-left: -20px;">I accept the Terms & Conditions listed above</div>
            <?php echo $form->error($model,'terms'); ?>
        </div>
    </div>
<div class="clear"></div>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->