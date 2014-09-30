<?php
/* @var $this TicketController */
/* @var $model Ticket */
/* @var $form CActiveForm */
?>

<?php
/* @var $this PicksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'My Tickets'=>array('ticket/mytickets'),
    'Edit Ticket',
);


$ticket_ID = $model->ID;
$ticket = Ticket::model()->find_ticket_by_ID($ticket_ID);
$ticket_code = $ticket['code'];
if(Yii::app()->user->hasState('my_picks'))
{
    $my_picks =Yii::app()->user->getState('my_picks');
}
if(!isset($my_picks)){
    $my_picks = Picks::model()->find_tickets_by_ID($ticket_ID);
}

$string_exploded = explode("-", $ticket_code);
$school_ID = $string_exploded[0];
$school = School::model()->get_name_by_ID($school_ID);
?>

<script src="/js/general.js"></script>

<p>Please select a team from each seed.  The center column is your ticket, and don't forget to hit the save button when you are finished.<br/>This ticket can be edited up until noon of the first game EST.</p>
<!--centered info needs to be updated by the user table-->
<div class="centered_div text_center">
    <div class="boxed">
        <?php echo Yii::app()->user->ID; ?> <!--echo out user-->
    </div>
    <div class="boxed">
        Entry <?php echo $ticket_code; ?> <!--echo out ticket number-->
    </div>
    <div class="boxed" style="margin-top: 10px;">
        <?php echo $school; ?> <!--echo out school-->
    </div>
    <br/>
    <div>
        FROM EACH OF THE 4 REGIONS<br/>PICK ONE OF EACH SEED<br/>TO MAKE YOUR BRACKET
    </div>
    <br/>
    <br/>
    <div>
        <h3>My Picks</h3>
    </div>
    <!--this div should be updated whenever a button is clicked on the page-->
    <div class="regional_div regional_div_my_picks" id="my_picks" >
        <?php echo $this->renderPartial('container/my_picks_div', array('picks' => $my_picks,'ticket_ID' => $ticket_ID));?>
        <div class="picks">
            <!--save-->
            <button style="width:100%; border-radius: 0px;" onclick="save_picks()">Save</button>                                            <!--save my picks and go back to my tickets page-->
            <!--radom select all seeds-->
            <button style="width:100%; border-radius: 0px;" onclick="easy_picks()">Easy Pick</button>                                         <!--onclick $picks = Ticket::model()->easy_pick(); and refresh my_picks div-->
            <!--reset all seeds-->
            <button style="width:100%; border-radius: 0px;" onclick="reset_picks()">Reset</button>             <!--reset all picks to TBA and refresh the div-->
        </div>
    </div>
</div>

<script>
    function save_picks(){
        var data = {};
        var url = '/index.php/picks/savepicks';
        var count = 0;
        $('input:checked').each(function(){
            var team_ID = $(this).val();
            var seed = $(this).attr('seed');
            data[seed] = team_ID;
            count++;
        })
        if(count<16){
            $("#freeow").freeow("Select All 16 Teams", "The ticket can not be saved till all 16 teams are selected.  Please select the remaining "+(16-count)+" teams for your ticket. ");
            return false;
        }
        $.ajax({
            type: "POST",
            url: url,
            data: { team_IDs : data , ticket_ID : <?php echo $ticket_ID; ?>},
            success: function(){
                window.location.href='/index.php/ticket/mytickets';
            }
        });

    }
    function reset_picks(){
            $("#freeow").freeow("Resetting!", "One moment as we reset your picks.  Please note that it will go back to your last saved entries");
            window.location.reload();
    }
    function easy_picks(){
        $("#freeow").freeow("Easy Picking!", "One moment as we pick for you!.  Please note that you will need to save these picks if you like them.");
        var url = '/index.php/ticket/update/'+<?php echo $ticket_ID; ?>;
        $.ajax({
            type: "POST",
            url: url,
            data: { easy_picks : 1},
            success: function(){
                window.location.reload();
            }
        });
    }
    $( "#alternet_view" ).button().on( "click", function() {
        dialog.dialog( "open" );
    });
</script>

<div class="clear"></div>
<div style="position: absolute; margin-left: 250px"><div class="regional_div ticket text_center" style="background: #cbd0d9; width:150px;">
        <p>
            Looking for an easier way to set up your ticket?  Try this view!
        </p>
        <button id="add_ticket">Alternate View</button>
    </div></div>
<!--the 4 regions with the 16 radio buttons in each-->
<div style="float: left;  z-index: 100;">
    <!--south region-->
    <div class="regional_div">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 1)); ?>
    </div>
    <!--east region-->
    <div class="regional_div" >
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 3)); ?>
    </div>
</div>
<div style="float: right; z-index: 100;">
    <!--west region-->
    <div class="regional_div">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 2)); ?>
    </div>
    <!--midwest region-->
    <div class="regional_div" >
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 4)); ?>
    </div>
</div>
<div id="dialog-form" title="Add a Ticket">
    <p class="validateTips">Please Enter Ticket Number</p>
    <?php echo $this->renderPartial('container/seed_button', array('seed' => 1)); ?>
</div>
<script>
    /*set the div class picks to jqueries radio button set for css*/
    $('.picks').buttonset();
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

<?php
//clear out the easy pick if it was picked
Yii::app()->user->setState('my_picks',null);
?>
