<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 5/29/14
 * Time: 4:55 PM
 *
 * pass in: region ID
*/
?>
<div class="roster">

<?php
$roster = TeamTournamentRegion::model()->select_tournament_roster($region);
$spacer = 0;
foreach($roster as $teamRegion)
{
    $spacer++;
    $seed = $teamRegion->seed;
    $team = $teamRegion->team->name;
    ?>
    <div class="bracket_box">
        <?php
            if($region%2 == 1){
                echo $seed.' '.$team;
            }else{
                echo $team.' '.$seed;
            }
        ?>
    </div>
    <?php  if($spacer%2 == 0){
    $team2_ID = $teamRegion->team_ID;
    $games = Game::model()->get_scores(1,$team1_ID,$team2_ID);
    if($games != ''){?>
        <div class="score_box" style="margin-left:<?php if($region%2==1){echo '120px;';}else{echo '-20px;';}?>">
            <?php echo $games->team_1_score.'<br/>'.$games->team_2_score;?>
        </div>
        <?php
        } ?>
    <div class="spacer"></div>
<?php
}
    $team1_ID = $teamRegion->team_ID;
}?>

</div>