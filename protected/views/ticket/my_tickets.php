<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/23/14
 * Time: 1:02 PM
 */
$this->breadcrumbs=array(
    'Tickets',
);
    $mytickets = Ticket::model()->get_tickets_by_user_ID();
?>
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
    <div class="regional_div regional_div_my_picks" id="my_picks" style="float:left; margin-left: 20px; background: #acacac;">
        <span style="color: black;"><b>School : </b><?php echo $school;?></span><br/>
        <span style="color: black;"><b>Ticket # : </b><?php echo $ticket['code']; ?></span>
        <?php echo $this->renderPartial('container/my_picks_div', array('picks' => $my_picks,'ticket_ID' => $ticket['ID']));?>
        <a style="text-align: center" href="/index.php/ticket/update/<?php echo $ticket['ID'];?>" >Edit Ticket</a>
    </div>
<?php }?>


