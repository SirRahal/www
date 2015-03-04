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
<br/><br/>
<h1>How To Play</h1>
<h3>
    <b>1)</b> To create your entry, please select a team from each seed (1 thru 16).<br/>
    <b>2)</b> Simply click on the teams name you wish to choose for each seed.<br/>
    <b>3)</b> Once all 16 teams are chosen, click the save button located at the bottom of your pick table.<br/>
    <b>4)</b> Your picks can be changed any time before the entry window deadline <i><b>(3/19/15) @ 11a.m. EST.</b></i><br/>
    <b>5)</b> For your convenience there is an easy pick button that auto populates your picks.
</h3>
<br/><br/>
<!--centered info needs to be updated by the user table-->
<div class="centered_div text_center">
    <div style="margin-top: -10px;">
        <h2 class="orange_text">PICK YOUR FAVORITE TEAMS<br/>FROM EACH SEED TO<br/>CREATE YOUR ENTRY<h2/>
    </div>
    <div>
        <h1>My Picks</h1>
    </div>
    <!--this div should be updated whenever a button is clicked on the page-->
    <div class="regional_div regional_div_my_picks" id="my_picks" >
        <?php echo $this->renderPartial('container/my_picks_div', array('picks' => $my_picks,'ticket_ID' => $ticket_ID));?>
        <div class="picks">
            <!--save-->
            <button style="width:100%; border-radius: 0px; font-size: 20px;" onclick="save_picks()">Save My Picks</button>                                            <!--save my picks and go back to my tickets page-->
            <div class="spacer"></div>
            <!--radom select all seeds-->
            <button style="width:100%; border-radius: 0px; font-size: 20px;" onclick="easy_picks()">Easy Pick</button>                                         <!--onclick $picks = Ticket::model()->easy_pick(); and refresh my_picks div-->
            <div class="spacer"></div>
            <!--reset all seeds-->
            <button style="width:100%; border-radius: 0px; font-size: 20px;" onclick="reset_picks()">Reset to Last Saved</button>             <!--reset all picks to TBA and refresh the div-->
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

<!--the 4 regions with the 16 radio buttons in each-->
<div style="float: left;  z-index: 100;">
    <!--south region-->
    <div class="regional_div gradient_left">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 1)); ?>
    </div>
    <!--east region-->
    <div class="regional_div gradient_left" >
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 3)); ?>
    </div>
</div>
<div style="float: right; z-index: 100;">
    <!--west region-->
    <div class="regional_div gradient_right">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 2)); ?>
    </div>
    <!--midwest region-->
    <div class="regional_div gradient_right" >
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 4)); ?>
    </div>
</div>
<br/>

<script>
    /*set the div class picks to jqueries radio button set for css*/
    $('.picks').buttonset();
    $('#alternet_button').buttonset();
</script>

<?php
//clear out the easy pick if it was picked
Yii::app()->user->setState('my_picks',null);
?>
