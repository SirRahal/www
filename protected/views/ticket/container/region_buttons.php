<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/6/14
 * Time: 10:32 AM
 */

/*teams are the teams of the specific region, 1 = South, 2 = West, 3 = Ease, 4 = Midwest*/
$teams = TeamTournamentRegion::model()->select_tournament_roster_by_seed($region_ID);
$url = explode ('/',$_SERVER['REQUEST_URI']);
$ticket_ID = $url[4];

if(Yii::app()->user->hasState('my_picks'))
{
    $picks =Yii::app()->user->getState('my_picks');
}
if(!isset($picks)){
    $picks = Picks::model()->find_tickets_by_ID($ticket_ID);
}
?>
<style>
    .ui-button-text-only .ui-button-text {
        padding: 0;
    }
</style>

<!--class picks changed radio buttons into jquery css radio buttons-->
<div class="picks" >
    <div style="text-align: center; padding-bottom: 5px;">
        <h1 class="bold gray_text">
            <?php if($region_ID == 1){ echo "South";}elseif($region_ID == 2){ echo "West";}elseif($region_ID == 3){ echo "East";}elseif($region_ID == 4){ echo "Midwest";};?> Region
        </h1>
    </div>
    <?php
    foreach($teams as $teamRegion)
    {
    $seed = $teamRegion->seed;
    $team = $teamRegion->team->name;
    $team_ID = $teamRegion->team_ID;
    /*trigger is the way to give each button it's own trigger 1-64*/
    $triger_ID = 'trigger'.(($region_ID*16 -16)+$seed);
    $picked = false;
        if(!strcmp($picks[$seed-1], $team)){
            $picked = true;
        }else if ($picks[$seed-1]=='TBA'){
            $picked = false;
        }
    ?>
    <!--ticketID='here'-->
    <div team_ID='<?php echo $team_ID; ?>' team_name='<?php echo $team; ?>' >
        <?php if ($region_ID == 1 || $region_ID == 3) { ?>
            <div class="seed_title" style="float: left;">
                <b><?php echo $seed ;?></b>
            </div>
            <input style="float: left;" type="radio" seed="<?php echo $seed; ?>" name="radio_button<?php echo $seed;?>" id="<?php echo $triger_ID; ?>" value="<?php echo $team_ID;?>" onclick="fill_entry(<?php echo $triger_ID .','. $seed; ?>);" <?php if($picked){echo 'checked'; } ?>/>
            <label style="border-radius: 0px; float: left;" for="<?php echo $triger_ID; ?>"><?php echo $team; ?></label>
            <div class="clear spacer"></div>
        <?php } else { ?>
            <input type="radio" seed="<?php echo $seed; ?>" name="radio_button<?php echo $seed;?>" id="<?php echo $triger_ID; ?>" value="<?php echo $team_ID;?>" onclick="fill_entry(<?php echo $triger_ID .','. $seed; ?>);" <?php if($picked){echo 'checked'; } ?>/>
            <label style="border-radius: 0px;" for="<?php echo $triger_ID; ?>"><?php echo $team; ?></label>
            <div style="float: left; width:13px; padding-left:8px;" >
                <div class="seed_title" style="float: left;" >
                    <b><?php echo $seed ;?></b>
                </div>
            </div>
            <div class="clear spacer"></div>
        <?php }?>
    </div>
    <?php } ?>
</div>

<script type="text/javascript">
    function fill_entry(ID, seed){
        var team = $(ID).parent('div').attr('team_name');
        var team_ID = $(ID).parent('div').attr('team_ID');
        $('#radio'+seed).text(team);
        $('#radio'+seed).attr('team_ID',team_ID);
        $('#radio'+seed).attr('ticket',<?php echo $ticket_ID;?> );
    }
</script>

