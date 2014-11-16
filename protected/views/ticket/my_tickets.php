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
                width: 350,
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
    <div style="float: right; right:40px; margin-top: -80px;">
        <?php echo $this->renderPartial('/site/container/count_down'); ?>
    </div>
    <div class="clear"></div>
<!--if the user has more than one ticket-->
    <?php /*foreach($mytickets as $ticket){
        $my_picks = Picks::model()->find_tickets_by_ID($ticket['ID']);
        $string_exploded = explode("-", $ticket['code']);
        $school_ID = $string_exploded[0];
        $school = School::model()->get_name_by_ID($school_ID);
        */?><!--
        <div class="regional_div ticket ticket_box" id="my_picks" style="">
            <span><a class="tooltip" title="See how you rank up against others in <?php /*echo $school; */?>" href="/index.php/school/<?php /*echo $school_ID; */?>"><b><?php /*echo $school;*/?></b></a></span><br/>
            <span><b>Entry # : </b><?php /*echo $ticket['code']; */?></span>
            <?php /*echo $this->renderPartial('container/my_picks_div', array('picks' => $my_picks,'ticket_ID' => $ticket['ID']));*/?>
            <a  class="button tooltip ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="padding: 5px 81px 5px 81px;" href="/index.php/ticket/update/<?php /*echo $ticket['ID'];*/?>" title="Edit This entry up until March 5th 12pm EST">Edit Entry</a>
        </div>
    --><?php /*}*/?>
<button id="add_ticket">Add Entry</button>
    <div class="clear"></div>


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
            <input type="text" name="ticket_code" id="ticket_code" placeholder="000-0000" class="text ui-widget-content ui-corner-all" title="You can find this on the bottom right hand side of your entry">
            <img src="/images/faq-ticket-codes.png" width="150";/>
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
        </fieldset>
    </form>
</div>