<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/23/14
 * Time: 1:02 PM
 */

 if(Yii::app()->user->isGuest){
     header("Location: http://bracketfanatic.com/index.php/site/login");
 }

$this->breadcrumbs=array(
    'My Entries',
);
    $mytickets = Ticket::model()->get_tickets_by_user_ID();
    $isMobile = (bool)preg_match('#\b(ip(hone|od|ad)|android|opera m(ob|in)i|windows (phone|ce)|blackberry|tablet'.
    '|s(ymbian|eries60|amsung)|p(laybook|alm|rofile/midp|laystation portable)|nokia|fennec|htc[\-_]'.
    '|mobile|up\.browser|[1-4][0-9]{2}x[1-4][0-9]{2})\b#i', $_SERVER['HTTP_USER_AGENT'] );
?>
<head>
    <script>
        $(function() {
            $( "#accordion" ).accordion({
                heightStyle: "content"
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
    <!--<div class="row add_ticket_div">
        <button id="add_ticket">Add Ticket</button>
    </div>-->
    <div class="clear spacer"></div>
    <div id="accordion">
    <?php
        $mytickets = Ticket::model()->get_tickets_by_user_ID();
        foreach($mytickets as $ticket){?>
            <h3><b>Ticket : </b><?php echo $ticket['code']; ?></h3>
            <div class="ticket_table_display">
                <?php echo $this->renderPartial('container/score_table', array('ticket' => $ticket)); ?>
            </div>
        <?php } ?>
    </div>
<?php if(!isset($mytickets[0])){?>
    <div>
        Unfortunently you did not meet the deadline to fill out your ticket and it has been removed.
    </div>
<?php } ?>

<!--<div id="dialog-form" title="Add a Ticket">
    <p class="validateTips">Please Enter Ticket Number</p>
    <form>
        <fieldset>
            <label for="ticket_code">Ticket Code #</label>
            <input type="text" name="ticket_code" id="ticket_code" placeholder="0-0000" class="text ui-widget-content ui-corner-all" title="You can find this on the front side of your Ticket towards the bottom">
            <br/><br/>
            <img src="/images/ticket.png" width="<?php /*if($isMobile){echo '720';}else{ echo'360'; } */?>";/>
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
        </fieldset>
    </form>
</div>-->