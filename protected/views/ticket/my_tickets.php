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
    </script>
</head>


<h1>My Tickets</h1>

<div>
    <p>Belowe are your tickets</p>
    <a href="#">Add a Ticket</a>
</div>
<br/>
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
        <a style="text-align: center" href="/index.php/ticket/update/<?php echo $ticket['ID'];?>" >Edit Ticket</a>
    </div>
<?php }?>

<div class="clear"></div>

<div id="accordion">
<?php
    $mytickets = Ticket::model()->get_tickets_by_user_ID();
    foreach($mytickets as $ticket){?>
        <h3><b>Ticket : </b><?php echo $ticket['code']; ?></h3>
        <div style="background: #e6e6e6; color: #555555;">
            <?php echo $this->renderPartial('container/score_table', array('ticket' => $ticket)); ?>
        </div>
    <?php } ?>
</div>

