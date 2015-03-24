<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/7/14
 * Time: 7:58 PM
 *
 * $picks[] : array of 16 of the set/selected radio buttons for the seeds
 */
if(!isset($_SESSION['isMobile'])){
    $isMobile = (bool)preg_match('#\b(ip(hone|od|ad)|android|opera m(ob|in)i|windows (phone|ce)|blackberry|tablet'.
        '|s(ymbian|eries60|amsung)|p(laybook|alm|rofile/midp|laystation portable)|nokia|fennec|htc[\-_]'.
        '|mobile|up\.browser|[1-4][0-9]{2}x[1-4][0-9]{2})\b#i', $_SERVER['HTTP_USER_AGENT'] );
}else{
    $isMobile = $_SESSION['isMobile'];
}
?>
<div>
<table>
    <!-- $i is the seed -->
    <?php for ($i = 1;$i<17; $i++){
        $team = Team::model()->findByAttributes(array('name'=>$picks[$i-1] ));
        $team_ID = $team['ID'];
        $score_1 = Team::model()->get_scores($team_ID,$round);
        $ticket_total_points = Ticket::model()->find_ticket_by_ID($ticket_ID);
        if($isMobile){
            $team_nme = $team['logo'];
        }else{
            $team_nme = $team['name'];
        }

        if($round < 5){
            $round_title = 'rd_'.$round;
        }else{
            $round_title = 'total_points';
            $score_1 = TeamTournamentRegion::model()->select_team_total_points($team_ID);
        }
        $total_points = $ticket_total_points[$round_title];
        if($total_points == 0) {$total_points = '';}   ?>
        <?php
        $style = '';
        if($team->get_team_knockout_out($team['ID'])){
            $style = $style. ' color:red !important; ';
        }
        if ($i%2 == 0)
        {
            $style = $style. 'background : #cdd2db;';
        }else {
            $style = $style. 'background : #f9f1e0;';
        }
        ?>

        <tr style="<?php echo $style; ?>">
            <!--echo out the selected radio buttons-->
            <td style="width: 20px; text-align: center;"><?php echo $i; ?></td>
            <td id="radio<?php echo $i;?>" team_ID='<?php echo $team_ID;?>' ticket_ID='<?php echo $ticket_ID;?>' style="width:230px;"><?php echo $team_nme; ?></td>
            <td style="text-align: center; width:30px;"><b><?php echo $score_1;?></b></td>
        </tr>
    <?php } ?>
    <tr style="background: #acacac;">
        <td></td>
        <td style="text-align: center;"><b>Total</b></td>
        <td style="text-align: center;"><?php echo $total_points;?></td>
    </tr>
</table>
</div>
<!--add the three buttons as an example-->
