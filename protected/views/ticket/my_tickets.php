<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/23/14
 * Time: 1:02 PM
 */
$this->breadcrumbs=array(
    'My Entries',
);
    $mytickets = Ticket::model()->get_tickets_by_user_ID();
?>
<head>
    <script>
        $(function() {
            $( "#accordion" ).accordion({
                heightStyle: "content"
            });
        });
        $(function() {
            var dialog, form,
                ticket_code = $( "#ticket_code"),
                allFields = $( [] ).add( ticket_code ),
                    tips = $( ".validateTips" );

            function addTicket() {
                var valid = false;
                $.ajax({
                    type: "POST",
                    url: '<?php echo Yii::app()->createUrl('ticket/addTicket'); ?>',
                    data: {ticket_code : ticket_code.val()},
                    success: function(){
                        $("#freeow").freeow("Ticket Code Correct!", "The ticket will now be added to your ticket collection.  One Moment!");
                        dialog.dialog( "close" );
                        window.location.href='/index.php/ticket/mytickets';
                    }, error : function(){
                            $("#freeow").freeow("Ticket Code Incorrect!", "The ticket code entered is incorrect.  Please check the code and try again.", {classes : ["error"]});
                        }
                }
            );
            }
            dialog = $( "#dialog-form" ).dialog({
                autoOpen: false,
                height: 350,
                width: 500,
                modal: true,
                buttons: {
                    "Add Entry": addTicket,
                    Cancel: function() {
                        dialog.dialog( "close" );
                    }
                },
                close: function() {
                    form[ 0 ].reset();
                }
            });

            form = dialog.find( "form" ).on( "submit", function( event ) {
                addTicket();
            });

            $( "#add_ticket" ).button().on( "click", function() {
                dialog.dialog( "open" );
            });
        });
    </script>
</head>

<div class="main_title"><h1>My Entries</h1></div>
<div style="height: 10px;"></div>
<div class="clear"></div>
    <div class="countdown_div">
        <?php echo $this->renderPartial('/site/container/count_down'); ?>
    </div>
    <div class="clear"></div>
<button id="add_ticket">Add Entry</button>
    <div class="clear spacer"></div>
    <div id="accordion">
    <?php
        $mytickets = Ticket::model()->get_tickets_by_user_ID();
        foreach($mytickets as $ticket){?>
            <h3><b>Entry : </b><?php echo $ticket['code']; ?></h3>
            <div class="ticket_table_display">
                <?php echo $this->renderPartial('container/score_table', array('ticket' => $ticket)); ?>
            </div>
        <?php } ?>
    </div>
<div id="dialog-form" title="Add a Entry">
    <p class="validateTips">Please Enter Entry Number</p>
    <form>
        <fieldset>
            <label for="ticket_code">Entry Code #</label>
            <input type="text" name="ticket_code" id="ticket_code" placeholder="0-0000" class="text ui-widget-content ui-corner-all" title="You can find this on the bottom right hand side of your entry">
            <img src="/images/faq-ticket-codes.png" width="150";/>
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
        </fieldset>
    </form>
</div>