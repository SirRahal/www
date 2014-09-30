<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 9/30/14
 * Time: 10:22 AM
 */

/*teams are the teams of the specific region, 1 = South, 2 = West, 3 = Ease, 4 = Midwest*/
$teams = TeamTournamentRegion::model()->select_teams_by_seed($seed);
$url = explode ('/',$_SERVER['REQUEST_URI']);
$ticket_ID = $url[4];

if(Yii::app()->user->hasState('my_picks'))
{
    $picks =Yii::app()->user->getState('my_picks');
}
if(!isset($picks)){
    $picks = Picks::model()->find_tickets_by_ID($ticket_ID);
}

$region_ID = 0;
foreach($teams as $team){
    $region_ID++;
    $team_ID = $team->team_ID;
    $temp = Team::model()->findByPk($team_ID);
    $team_name = $temp->name;
    $triger_ID = 'trigger'.(($region_ID*16 -16)+$seed);
    $picked = false;
    switch($region_ID){
        case 1:
            $region_name = 'South';
            break;
        case 2:
            $region_name = 'West';
            break;
        case 3:
            $region_name = 'East';
            break;
        case 4:
            $region_name = 'Midwest';
            break;
    }
    if(!strcmp($picks[$seed-1], $team_name)){
        $picked = true;
    }else if ($picks[$seed-1]=='TBA'){
        $picked = false;
    }
    ?>

    <div class="picks" >
        <!--ticketID='here'-->
        <div team_ID='<?php echo $team_ID; ?>' team_name='<?php echo $team_name; ?>' >
            <div style="float: left; width:60px; padding-top: 7px;" >
                <?php echo $region_name ;?>
            </div>
            <input type="radio" seed="<?php echo $seed; ?>" name="radio_button<?php echo $seed;?>" id="<?php echo $triger_ID; ?>" value="<?php echo $team_ID;?>" onclick="fill_entry(<?php echo $triger_ID .','. $seed; ?>);" <?php if($picked){echo 'checked'; } ?>/>
            <label style="border-radius: 0px;" for="<?php echo $triger_ID; ?>"><?php echo $team_name; ?></label>
        </div>
    </div>
<?php
}
?>


<script type="text/javascript">
    function fill_entry(ID, seed){
        var team = $(ID).parent('div').attr('team_name');
        var team_ID = $(ID).parent('div').attr('team_ID');
        $('#radio'+seed).text(team);
        $('#radio'+seed).attr('team_ID',team_ID);
        $('#radio'+seed).attr('ticket',<?php echo $ticket_ID;?> );
    }
</script>