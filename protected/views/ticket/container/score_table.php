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
        ?>
        <div><span><b>Ticket # </b><?php echo $ticket['code']; ?><br/><b>School : </b><a href="#"><?php echo $school;?></a></span></div>
        <table style="border: solid #acacac; ">
            <tbody>
            <tr>
                <td>Seed</td>
                <td>Team</td>
                <td>Rd 1</td>
                <td>Rd 2</td>
                <td>Rd 3</td>
                <td>Rd 4</td>
                <td>Rd 5</td>
                <td>Rd 6</td>
                <td>Total</td>
            </tr>
            <tr>



                <?php
                $my_picks = Picks::model()->find_tickets_by_ID($ticket['ID']);
                for ($i = 1;$i<17; $i++){
                $team = Team::model()->findByAttributes(array('name'=>$picks[$i-1] ));
                $team_ID = $team['ID'];
                ?>
            <tr>
                <!--echo out the selected radio buttons-->
                <td style="width: 20px;"><?php echo $i; ?></td>
                <td Style="width: 130px;" id="radio<?php echo $i;?>" team_ID='<?php echo $team_ID;?>' ticket_ID='<?php echo $ticket_ID;?>'><?php echo $picks[$i-1]; ?></td>
                <td><!--echo out round 1--></td>
                <td><!--echo out round 2--></td>
                <td><!--echo out round 3--></td>
                <td><!--echo out round 4--></td>
                <td><!--echo out round 5--></td>
                <td><!--echo out round 6--></td>
                <td><!--echo out total  --></td>
            </tr>
            <?php } ?>



            </tr>
            </tbody>
        </table>
</div>
