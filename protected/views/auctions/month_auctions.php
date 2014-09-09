<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 8/25/14
 * Time: 12:12 PM
 */

$second_date = strtotime("+31 day");
$second_date =  date('Y-m-d',$second_date);
$auctions = Auctions::model()->get_this_weeks_auctions();
$lastdate = 0000-00-00;



?>
<style>
    .odd{
        background: #ededed;
    }
    .date{
        background: #acacac;
        color: #ffffff;
        text-align: center;
    }
</style>
<table class="table" style="max-width:400px; font-size: 16px !important;">
    <tbody>
    <?php
    $i = 0;
    foreach ($auctions as $auction){
        if($auction->date < $second_date){
            $i++;
            if($auction->date != $lastdate){ $lastdate = $auction->date; ?>
                <tr>
                    <td colspan="2" class="date"><?php echo date("l, m/d", strtotime($auction->date)); ?></td>
                </tr>
            <?php }
            ?>
            <tr <?php if ($i%2 == 1){echo "class='odd'";} ?>>
                <td ><a href="<?php echo $auction->url;?>"><?php echo $auction->company; ?></a></td>
                <td ><?php echo $auction->location;?></td>
            </tr>
        <?php } }?>
    </tbody>
</table>



