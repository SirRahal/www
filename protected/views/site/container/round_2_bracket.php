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
$games = Game::model()->games_in_tournament(1);
foreach($games as $reagionGames){
    echo $reagionGames->team_1_score;
}
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

    <?php  if($spacer%2 == 0){?>
    <div class="spacer"></div>
<?php
}
}?>

</div>