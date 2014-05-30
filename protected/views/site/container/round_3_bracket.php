<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 5/30/14
 * Time: 10:46 AM
 */
?>
<div style="margin-top: 10px;">

<?php for ($i = 1; $i < 9; $i++) {?>
    <div class="bracket_box" style="margin-bottom: 35px;">
        <?php
        $round_3 = TournamentResults::model()->get_round_results(3,$region_ID);
        echo $round_3->ID;
        ?>
    </div>

<?php }?>
</div>