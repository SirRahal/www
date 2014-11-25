<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/23/14
 * Time: 3:44 PM
 */ ?>
<div>
    <?php
        $ticket_ID = $ticket['ID'];
        $picks = Picks::model()->find_tickets_by_ID($ticket_ID);
        $string_exploded = explode("-", $ticket['code']);
        $school_ID = $string_exploded[0];
        $school = School::model()->get_name_by_ID($school_ID);
        $my_picks = Picks::model()->find_tickets_by_ID($ticket['ID']);
        $total_total = 0;
        $placement = $ticket['placement'];
        $prev_placement = $ticket['prev_placement'];
        $placement_difference = $prev_placement - $placement;
        ?>
        <div><b>School : </b><?php echo $school;?></div>
        <b>Total Points : </b><?php echo $ticket['total_points'];?><br/>
        <b>League Placement : </b><?php echo $ticket['placement'];?>
        <div class="mobile_not_float_right button_arrangment">
            <a class="button tooltip ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="padding: 5px 81px 5px 81px;" href="/index.php/school/<?php echo $school_ID; ?>" title="See how you rank up against other at <?php echo $school; ?>">My Ranking</a>
            <a class="button tooltip ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="padding: 5px 81px 5px 81px;" href="/index.php/ticket/update/<?php echo $ticket['ID']; ?>" title="Edit This entry up until March 5th 12pm EST">Edit Entry</a>
        </div>
        <?php if ($placement_difference > 0){
                    echo '+'.$placement_difference; ?> <img src="/images/600px-Green_Arrow_Up.png" width="10"/>
                <?php }elseif($placement_difference < 0){
                    echo $placement_difference; ?> <img src="/images/red_arrow_down.png" width="10"/>
                <?php } ?>
     <!--echo out league placement-->
        <table style="border: solid #333333; ">
            <tbody >
                <tr style="background:#333333; color:#ffffff; font-weight: bold;">
                    <td>Seed</td>
                    <td style="width: 160px;;">Team</td>
                    <td style="text-align: center;">Round 1</td>
                    <td style="text-align: center;">Round 2</td>
                    <td style="text-align: center;">Round 3</td>
                    <td style="text-align: center;">Round 4</td>
                    <td style="text-align: center;">Round 5</td>
                    <td style="text-align: center;">Round 6</td>
                    <td style="text-align: center;">Total</td>
                </tr>
                <tr>
                    <?php
                    for ($i = 1;$i<17; $i++){
                        $team = Team::model()->findByAttributes(array('name'=>$picks[$i-1] ));
                        $team_ID = $team['ID'];
                        $score_1 = Team::model()->get_scores($team_ID,1);
                        $score_2 = Team::model()->get_scores($team_ID,2);
                        $score_3 = Team::model()->get_scores($team_ID,3);
                        $score_4 = Team::model()->get_scores($team_ID,4);
                        $score_5 = Team::model()->get_scores($team_ID,5);
                        $score_6 = Team::model()->get_scores($team_ID,6);
                        $total = $score_1 + $score_2 + $score_3 + $score_4 + $score_5 + $score_6;
                        ?>
                        <tr <?php if ($i%2 == 0){echo 'style="background : #cdd2db;"';} else { echo 'style="background : #f9f1e0;"';} ?>>
                        <!--echo out the selected radio buttons-->
                            <td style="width: 20px; text-align: center;"><b><?php echo $i; ?></b></td>
                            <td Style="width: 130px;"><?php echo $picks[$i-1]; ?></td>
                            <td style="text-align: center;"><!--echo out round 1--><?php echo $score_1; ?></td>
                            <td style="text-align: center;"><!--echo out round 2--><?php echo $score_2; ?></td>
                            <td style="text-align: center;"><!--echo out round 3--><?php echo $score_3; ?></td>
                            <td style="text-align: center;"><!--echo out round 4--><?php echo $score_4; ?></td>
                            <td style="text-align: center;"><!--echo out round 5--><?php echo $score_5; ?></td>
                            <td style="text-align: center;"><!--echo out round 6--><?php echo $score_6; ?></td>
                            <td style="text-align: center;"><!--echo out total  --><?php echo $total; ?></td>
                        </tr>
                <?php } ?>
                </tr>
                <tr style="background: #333333; color:#ffffff;">
                    <td></td>
                    <td style="text-align: center;"><b>Total</b></td>
                    <td style="text-align: center;"><?php echo $ticket['rd_1']; ?></td>
                    <td style="text-align: center;"><?php echo $ticket['rd_2']; ?></td>
                    <td style="text-align: center;"><?php echo $ticket['rd_3']; ?></td>
                    <td style="text-align: center;"><?php echo $ticket['rd_4']; ?></td>
                    <td style="text-align: center;"><?php echo $ticket['rd_5']; ?></td>
                    <td style="text-align: center;"><?php echo $ticket['rd_5']; ?></td>
                    <td style="text-align: center;"><?php echo $ticket['total_points']; ?></td>
                </tr>
            </tbody>

        </table>

</div>
