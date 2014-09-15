<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="/css/jquery-ui-custom/jquery-ui.css" />


<style>
    .no-close .ui-dialog-titlebar-close {
        display: none;
    }

</style>
<script>
    $(function() {
        var dialog, form,

        //put vaariable here

            input = $( "#input"),
            allFields = $( [] ).add( input),
            tips = $( ".validateTips" );

        function addUser() {
            if(checkValid())
            {
                var valid = true;
                allFields.removeClass( "ui-state-error" );
                $.ajax({
                        type: "POST",
                        url: '<?php echo Yii::app()->createUrl('contacts/createContacts'); ?>',
                        data: {
                            input : input.val()
                        },
                        success: function(){
                            alert('Thank you for posting your auction.  Someone will be contacting you soon!');
                        }, error : function(){
                            alert('Sorry there is an error with your form, please try again.  If the issue happens again, please contact us to assist you input : '+input.val());
                        }
                    }
                );
            }else{
                alert('Please fill out the whole form before submitting.');
            }
            return valid;
        }

        function checkValid(){
            if(input.val() < 1 ){
                return false;
            }else{
                return true;
            }

        }

        dialog = $( "#dialog-form" ).dialog({
            autoOpen: true,
            width: 700,
            modal: true,
            buttons: {
                "Create Contacts": addUser,
                Cancel: function() {
                    dialog.dialog( "close" );
                }
            },
            close: function() {
                form[ 0 ].reset();
                allFields.removeClass( "ui-state-error" );
            }
        });

        form = dialog.find( "form" ).on( "submit", function( event ) {
            event.preventDefault();
            addUser();
        });

        $( "#post_auction" ).button().on( "click", function() {
            dialog.dialog( "open" );
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
<div id="dialog-form" title="Create Contacts">
    <form>
        <fieldset>
            <textarea rows="3" cols="63" name="input" id="input" class="text ui-widget-content ui-corner-all"></textarea>
            <!-- Allow form submission with keyboard without duplicating the dialog button -->
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px" name="input" id="input" class="text ui-widget-content ui-corner-all">
        </fieldset>
    </form>
    <div class="clear"></div>

</div>