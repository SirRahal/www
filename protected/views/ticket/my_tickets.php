<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/23/14
 * Time: 1:02 PM
 */
$this->breadcrumbs=array(
    'My Tickets',
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
                    "Add Ticket": addTicket,
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

<h1>My Tickets</h1>

<div class="clear"></div>
<div>
    <span>Tickets can be edited and updated until the cut off date</span><br/>
    <span style="color: #f1901e">March 5th 12pm EST</span>
    <p>Below are your tickets</p>
    <div style="float: right; margin-top: -50px; margin-right: 50px;">

    </div>
</div>

<?php foreach($mytickets as $ticket){
    $my_picks = Picks::model()->find_tickets_by_ID($ticket['ID']);
    $string_exploded = explode("-", $ticket['code']);
    $school_ID = $string_exploded[0];
    $school = School::model()->get_name_by_ID($school_ID);
    ?>
    <div class="regional_div ticket" id="my_picks" style="float:left; margin-left: 20px;">
        <span style="color: black;"><b>School : </b><a href="/index.php/school/<?php echo $school_ID; ?>"><?php echo $school;?></a></span><br/>
        <span style="color: black;"><b>Ticket # : </b><?php echo $ticket['code']; ?></span>
        <?php echo $this->renderPartial('container/my_picks_div', array('picks' => $my_picks,'ticket_ID' => $ticket['ID']));?>
        <a class="button" style="text-align: center" href="/index.php/ticket/update/<?php echo $ticket['ID'];?>">Edit Ticket</a>
    </div>
<?php }?>
<div class="regional_div ticket text_center" style="float:left; margin-left: 20px; background: #cbd0d9;">
    <p>
        Any tickets that are not filled out by March 5th at 12pm EST will be auto picked.
    </p>
    <button id="add_ticket">Add Ticket</button>
</div>
<div class="clear"></div>


<div id="accordion">
<?php
    $mytickets = Ticket::model()->get_tickets_by_user_ID();
    foreach($mytickets as $ticket){?>
        <h3><b>Ticket : </b><?php echo $ticket['code']; ?></h3>
        <div style="background: #f3911e; color: #000000;">
            <?php echo $this->renderPartial('container/score_table', array('ticket' => $ticket)); ?>
        </div>
    <?php } ?>
</div>

<div id="dialog-form" title="Add a Ticket">
    <p class="validateTips">Please Enter Ticket Number</p>
    <form>
        <fieldset>
            <label for="ticket_code">Ticket Code #</label>
            <input type="text" name="ticket_code" id="ticket_code" placeholder="000-0000" class="text ui-widget-content ui-corner-all" title="You can find this on the bottom right hand side of your ticket">
            <img src="/images/faq-ticket-codes.png" width="150";/>
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
        </fieldset>
    </form>
</div>