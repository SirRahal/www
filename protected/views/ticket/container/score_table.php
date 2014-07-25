<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/23/14
 * Time: 3:44 PM
 */ ?>
<div>
    <style>
        tr, td {
            border: 1px solid #acacac;
        }
    </style>
    <?php
        $ticket_ID = $ticket['ID'];
        $picks = Picks::model()->find_tickets_by_ID($ticket_ID);
        $string_exploded = explode("-", $ticket['code']);
        $school_ID = $string_exploded[0];
        $school = School::model()->get_name_by_ID($school_ID);
        $my_picks = Picks::model()->find_tickets_by_ID($ticket['ID']);
        $total_total = 0;
        ?>
        <div><b>School : </b><a href="/index.php/school/<?php echo $school_ID; ?>"><?php echo $school;?></a></div>
        <b>Total Points : </b><?php echo $ticket['total_points'];?><br/>
        <b>League Placement : </b> --<!--echo out league placement-->
        <table style="border: solid #acacac; ">
            <tbody >
                <tr>
                    <td><b>Seed</b></td>
                    <td style="width: 160px;;"><b>Team</b></td>
                    <td style="text-align: center;"><b>Rd 1</b></td>
                    <td style="text-align: center;"><b>Rd 2</b></td>
                    <td style="text-align: center;"><b>Rd 3</b></td>
                    <td style="text-align: center;"><b>Rd 4</b></td>
                    <td style="text-align: center;"><b>Rd 5</b></td>
                    <td style="text-align: center;"><b>Rd 6</b></td>
                    <td style="text-align: center;"><b>Total</b></td>
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
                        $total = TeamTournamentRegion::model()->select_team_total_points($team_ID);
                        ?>
                        <tr>
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
                <tr style="background: #acacac;">
                    <td></td>
                    <td style="text-align: center;"><b>Total</b></td>
                    <td style="text-align: center;"><?php echo $ticket['rd_1']; ?></td>
                    <td style="text-align: center;"><?php echo $ticket['rd_2']; ?></td>
                    <td style="text-align: center;"><?php echo $ticket['rd_3']; ?></td>
                    <td style="text-align: center;"><?php echo $ticket['rd_4']; ?></td>
                    <td style="text-align: center;"><?php echo $ticket['rd_5']; ?></td>
                    <td></td>
                    <td style="text-align: center;"><?php echo $ticket['total_points']; ?></td>
                </tr>
            </tbody>

        </table>

</div>