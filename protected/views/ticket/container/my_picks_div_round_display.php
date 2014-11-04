<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/7/14
 * Time: 7:58 PM
 *
 * $picks[] : array of 16 of the set/selected radio buttons for the seeds
 */
?>
<div>
<table>
    <!-- $i is the seed -->
    <?php for ($i = 1;$i<17; $i++){
        $team = Team::model()->findByAttributes(array('name'=>$picks[$i-1] ));
        $team_ID = $team['ID'];
        $score_1 = Team::model()->get_scores($team_ID,$round);
        $ticket_total_points = Ticket::model()->find_ticket_by_ID($ticket_ID);
        if($round < 5){
            $round_title = 'rd_'.$round;
        }else{
            $round_title = 'total_points';
            $score_1 = TeamTournamentRegion::model()->select_team_total_points($team_ID);
        }
        $total_points = $ticket_total_points[$round_title];
        if($total_points == 0) {$total_points = '';}   ?>
        <tr <?php if ($i%2 == 0){echo 'style="background : #cdd2db;"';} else { echo 'style="background : #f9f1e0;"'; } ?>>
            <!--echo out the selected radio buttons-->
            <td style="width: 20px; text-align: center;"><?php echo $i; ?></td>
            <td id="radio<?php echo $i;?>" team_ID='<?php echo $team_ID;?>' ticket_ID='<?php echo $ticket_ID;?>' style="width:230px;"><?php echo $picks[$i-1]; ?></td>
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
