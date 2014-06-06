<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/6/14
 * Time: 10:32 AM
 */

$teams = TeamTournamentRegion::model()->select_tournament_roster_by_seed($region_ID);
?>
<table>
    <?php
    foreach($teams as $teamRegion)
    {
    $seed = $teamRegion->seed;
    $team = $teamRegion->team->name;
    ?>
        <tr>
            <td>
                <div>
                    <?php
                    if($seed<10)
                    {?>
                        <input id="trigger" type="radio" url="radio<?php echo $seed*$region_ID;?>" name="radio<?php echo $seed;?>"><label for="radio<?php echo $seed;?>"><?php echo $seed ."&nbsp;&nbsp;&nbsp;&nbsp;".$team; ?></label>
                    <?php }else{?>
                    <input id="trigger" type="radio" id="radio<?php echo $seed;?>" name="radio<?php echo $seed;?>"><label for="radio<?php echo $seed;?>"><?php echo $seed .'&nbsp;&nbsp;'.$team; ?></label>
                   <?php }?>
                </div>
            </td>
        </tr>
    <?php } ?>
</table>


