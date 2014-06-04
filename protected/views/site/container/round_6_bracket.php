<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/2/14
 * Time: 1:16 PM
 */

$team1_ID = 0;
$team2_ID = 0;
$skip = 0;

$round_6 = TournamentResults::model()->get_final_four(1);
        ?>
<?php

?>
<div >
    <?php
    $skip = 0;
    for ($i = 0; $i < 4; $i++) {
        if($i == 2){ ?>
            <div style="height: 460px;"></div>
        <?php }
        ?>
        <div class="bracket_box" style="float: left; margin-left: 50px;">
            <?php if (empty($round_6[$i-$skip]['ID'])){
                echo 'TBA';
            }else {
                $team = TeamTournamentRegion::model()->findByPk($round_6[$i-$skip]['ID']);
                if($team->starting_placement ==(($i+1)*2-1 +16*$region_ID - 16)|| $team->starting_placement ==($i+1)*2 +16*$region_ID - 16)
                {
                    $skip = 0;
                    $team = $team->team_ID;
                    $team = Team::model()->findByPk($team);
                    echo $team->name;
                }else{
                    $skip++;
                    echo 'TBA';
                }
            }?>
        </div>
        <?php if($i%2 == 1 && !empty($round_6[$i-$skip]['ID'])){
            $team2_ID = $team->ID;
            $games = Game::model()->get_scores($region_ID,$team1_ID,$team2_ID);
            if($games != ''){?>
                <div class="score_box" style="margin-top: -107px;  margin-left:<?php if($region_ID%2==1){echo '118px;';}else{echo '-20px;';}?>">
                    <?php echo $games->team_1_score; ?>
                </div>
                <div class="score_box" style="margin-top: -52px; margin-left:120px;"><?php echo $games->team_2_score;?></div>
            <?php
            } ?>
        <?php
        }
        if (!empty($round_6[$i-$skip]['ID']))
            $team1_ID = $team->ID;
    }?>
</div>