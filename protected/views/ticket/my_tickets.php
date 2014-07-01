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
<head>
    <meta charset="utf-8">
    <title>jQuery UI Accordion - No auto height</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
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
        <div>
            <?php echo $this->renderPartial('container/score_table', array('ticket' => $ticket)); ?>
        </div>
    <?php } ?>
</div>

