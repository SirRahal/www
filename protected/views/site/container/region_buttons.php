<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/6/14
 * Time: 10:32 AM
 */

/*teams are the teams of the specific region, 1 = South, 2 = West, 3 = Ease, 4 = Midwest*/
$teams = TeamTournamentRegion::model()->select_tournament_roster_by_seed($region_ID);
?>

<!--class picks changed radio buttons into jquery css radio buttons-->
<div class="picks" >
    <?php
    foreach($teams as $teamRegion)
    {
    $seed = $teamRegion->seed;
    $team = $teamRegion->team->name;
    $team_ID = $teamRegion->team_ID;
    /*trigger is the way to give each button it's own trigger 1-64*/
    $triger_ID = 'trigger'.(($region_ID*16 -16)+$seed);
    ?>
    <div>
        <div style="float: left; width:20px; padding-top: 3px;">
            <?php echo $seed ;?>
        </div>
        <input type="radio" name="radio_button<?php echo $seed;?>" id="<?php echo $triger_ID; ?>" value="<?php echo $team_ID;?>" onclick="new ajax('container_here'),{update:$('my_picks')}); "/>
        <label for="<?php echo $triger_ID; ?>"><?php echo $team; ?></label>
    </div>
    <?php } ?>
</div>
