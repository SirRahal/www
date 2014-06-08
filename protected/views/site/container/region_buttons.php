<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/6/14
 * Time: 10:32 AM
 */

$teams = TeamTournamentRegion::model()->select_tournament_roster_by_seed($region_ID);
?>
<div class="picks" >
    <?php
    foreach($teams as $teamRegion)
    {
    $seed = $teamRegion->seed;
    $team = $teamRegion->team->name;
    $team_ID = $teamRegion->team_ID;
    ?>
    <div>
        <div style="float: left; width:20px; padding-top: 7px;">
            <?php echo  $seed ;?>
        </div>
        <input type="radio" name="radio_button<?php echo $seed;?>" id="trigger<?php echo $seed* ($region_ID*16 -15);?>" value="<?php echo $team_ID;?>" />
        <label for="trigger<?php echo $seed* ($region_ID*16 -15);?>"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".$team; ?></label>
    </div>
    <?php } ?>
</div>