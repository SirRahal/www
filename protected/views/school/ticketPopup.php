<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 9/5/14
 * Time: 3:17 PM
 */

$id = $_GET['id'];
$picks = Picks::model()->find_tickets_by_ID($id);




?>
<div class="clear"></div>
<div style="color: black">
<?php echo $this->renderPartial('/ticket/container/my_picks_div_round_display', array('picks' => $picks,'ticket_ID' => $id,'round' => 6));?>
</div>