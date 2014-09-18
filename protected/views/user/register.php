<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/10/14
 * Time: 11:14 AM
 * @var $this UserController
 * @var $model User
 **/

$this->breadcrumbs=array(
    'Users',
    'Register',
);
?>
    <h1>Register</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $valid_code=false; ?>
<script src="/js/jquery_ui.js"></script>
<link rel="stylesheet" type="text/css" href="/css/jquery-ui-custom/jquery-ui.css" />


<style>
    .no-close .ui-dialog-titlebar-close {
        display: none;
    }

</style>
<script>

    $(function() {
        var dialog, form,
            ticket = $( "#ticket" )
            allFields = $( [] ).add( ticket ),
            tips = $( ".validateTips" );

        function addUser() {
            if(checkValid())
            {
                var valid = true;
                allFields.removeClass( "ui-state-error" );
                $.ajax({
                        type: "POST",
                        url: '<?php echo Yii::app()->createUrl('ticket/validateTicket'); ?>',
                        data: {
                            ticket : ticket.val()
                        },
                        success: function(data){
                            if(data == 1){
                                $("#freeow").freeow("Congrats", "The code you entered was valid.  Please fill out your profile.");
                                <?php $valid_code = true; ?>
                                dialog.dialog( "close" );
                            }else{
                                $("#freeow").freeow("Invalid Code", "The code you entered was incorrect.  Please try again");
                            }
                        }, error : function(){
                            $("#freeow").freeow("Posting Error", "Sorry there is an error with your ticket code, please try again.");
                        }
                    }
                );
            }else{
                $("#freeow").freeow("Ticket Code!", "The ticket field is required.  It is located on your ticket and consists of 7 characters. exp 000-0000");
            }
            return valid;
        }

        function checkValid(){
            if( ticket.val() < 1 ){
                return false;
            }else{
                return true;
            }

        }
        
        dialog = $( "#dialog-form" ).dialog({
            autoOpen: <?php if(isset($_SESSION['ticket_ID'])) echo 'false'; else echo'true'; ?>,
            width: 400,
            height: 400,
            modal: true,
            buttons: {
                "Submit Ticket Code": addUser,
                Cancel: function() {
                    window.location='/index.php/site/login';
                }
            },
            close: function() {
                form[ 0 ].reset();
                dialog.dialog( "close" );
            }
        });

        form = dialog.find( "form" ).on( "submit", function( event ) {
            event.preventDefault();
            addUser();
        });


    });
</script>
<style>
    .note-box{
        border: solid #5c9bcb 1px;
        padding: 5px;
        margin-top: 40px;
        margin-bottom: 40px;
    }
</style>

<div id="dialog-form" title="Verify Your Ticket Code">
    <form>
        <fieldset>
            <table>
                <tbody>
                <tr>
                    <td>
                        <label for="ticket" >Ticket Code</label>
                    </td>
                    <td>
                        <input autofocus type="text" name="ticket" id="ticket" class="text ui-widget-content ui-corner-all">
                    </td>
                </tr>
                </tbody>
            </table>

            <img src="/images/faq-ticket-codes.png" width="240"/>
            <!-- Allow form submission with keyboard without duplicating the dialog button -->
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px" name="info" id="info" class="text ui-widget-content ui-corner-all">
        </fieldset>
    </form>
    <div class="clear"></div>

</div>
<!--This part was used for testing and echos out proper data-->
ticket ID : <?php if(isset($_SESSION['ticket_ID'])){ echo $_SESSION['ticket_ID'];} ?> <br/>
user ID : <?php if(isset($model->attributes)){
    echo $model->attributes['ID']; ?>, <?php } ?>