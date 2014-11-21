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
    <table style="font-size: 25px;">
        <!-- $i is the seed -->
        <?php for ($i = 1;$i<17; $i++){
            $team = Team::model()->findByAttributes(array('name'=>$picks[$i-1] ));
            $team_ID = $team['ID'];
            $total_points = TeamTournamentRegion::model()->select_team_total_points($team_ID);
            $ticket_total_points = Ticket::model()->select_ticket_total_points($ticket_ID);
            if($total_points == 0){$total_points = '';}
            ?>
            <tr <?php if ($i%2 == 0){echo 'style="background : #cdd2db; color:#000000;"';} else { echo 'style="background : #f9f1e0; color:#000000;"';} ?>>
                <!--echo out the selected radio buttons-->
                <td style="width: 20px; text-align: center;"><?php echo $i; ?></td>
                <td id="radio<?php echo $i;?>" team_ID='<?php echo $team_ID;?>' ticket_ID='<?php echo $ticket_ID;?>' ><?php echo $picks[$i-1]; ?></td>
            </tr>
        <?php } ?>
    </table>
<!--add the three buttons as an example-->
