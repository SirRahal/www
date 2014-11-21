<head>
    <title>jQuery UI Dialog - Default functionality</title>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script src="/js/jquery.freeow.js"></script>
    <script>
        $(function() { $( "input[type=submit],button" ) .button(); });
        $(function() {
            $( "#accordion" ).accordion({
                heightStyle: "content"
            });
        });
        $(function() {
            var dialog, form,
                email = $( "#email"),
                allFields = $( [] ).add( email ),
                tips = $( ".validateTips" );

            function resetPassword() {
                var valid = false;

                $.ajax({
                        type: "POST",
                        url: '<?php echo Yii::app()->createUrl('user/resetPassword'); ?>',
                        data: {email : email.val()},
                        success: function(){
                            $("#freeow").freeow("Notification!", "An email has been sent containing your new password.");
                            dialog.dialog( "close" );
                        }, error : function(){
                            $("#freeow").freeow("Email Error!", "The email you entered is incorrect.  Please check the email and try again.", {classes : ["error"]});
                        }
                    }
                );
            }
            dialog = $( "#dialog-form" ).dialog({
                autoOpen: false,
                modal: true,
                width:500,
                height:255,
                buttons: {
                    "Reset Password": resetPassword,
                    Cancel: function() {
                        dialog.dialog( "close" );
                    }
                },
                close: function() {
                    form[ 0 ].reset();
                }
            });

            form = dialog.find( "form" ).on( "submit", function( event ) {
                resetPassword();
            });

            $( "#reset_password" ).button().on( "click", function() {
                dialog.dialog( "open" );
            });
        });
    </script>
</head>
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="main_title"><h1>Login</h1></div>
<div class="mobile_container">
    <div style="text-align: center; margin: 0 auto;">
        <p>Please fill out the following form with your login credentials:</p>
        <div class="form">
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'login-form',
                'enableClientValidation'=>true,
                'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                ),
            )); ?>
            <div class="row">
                <?php echo $form->labelEx($model,'username'); ?><br/>
                <?php echo $form->textField($model,'username'); ?>
                <?php echo $form->error($model,'username'); ?>
            </div>
            <div class="row">
                <?php echo $form->labelEx($model,'password'); ?><br/>
                <?php echo $form->passwordField($model,'password'); ?>
                <?php echo $form->error($model,'password'); ?>
            </div>
            <div class="row">
                <?php echo $form->label($model,'rememberMe'); ?>
                <?php echo $form->checkBox($model,'rememberMe'); ?>
                <?php echo $form->error($model,'rememberMe'); ?>
            </div>
            <br/>
            <div class="row " >
                <?php echo CHtml::submitButton('Login'); ?>
                <button id="reset_password">Forgot Name or Password</button>
                <p class="note">Fields with <span class="required">*</span> are required.</p>
            </div>
            <?php $this->endWidget(); ?>
        </div><!-- form -->
    </div>

    <div id="dialog-form" title="Reset Password">
        <p class="validateTips">Please Enter Your Email Address that is registered to your account.  After resetting your password, you will relieve an email with your account and new password. </p>
        <form style="text-align: center;">
            <fieldset>
                <label for="email">Email </label>
                <input type="text" name="email" id="email" class="text ui-widget-content ui-corner-all" title="You can find this on the bottom right hand side of your ticket">
                <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
            </fieldset>
        </form>
    </div>
</div>
<div class="mobile_container">
    <div style="border: solid 1px orange; padding:20px; text-align: center; border-radius: 10px; box-shadow: 10px 8px 15px #494949;">
        <h3>Have a ticket, and not a user yet?</h3>
        <img src="/images/ticket.png" class=" shadow" width="300"/><br/><br/>
        <button onclick="location.href='/index.php/user/register'">Register Now</button>
    </div>
</div>
<div class="mobile_not_float_right"></div>