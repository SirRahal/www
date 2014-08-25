<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 8/25/14
 * Time: 12:12 PM
 */

$second_date = strtotime("+7 day");
$second_date =  date('Y-m-d',$second_date);
$auctions = Auctions::model()->get_this_weeks_auctions();
$lastdate = 0000-00-00;



?>
<style>
    .col1{
        width:20%;
    }
    .col2{
        width:60%;
    }
    .col3{
        width:20%;
    }
    .odd{
        background: #ededed;
    }
    .date{
        background: #7f7f7f;
        color: #ffffff;
    }
    .table{
        width:900px !important;
    }
</style>
<table class="table" style="width:900px;">
    <tbody>
    <?php
    $i = 0;
    foreach ($auctions as $auction){
    if($auction->date < $second_date){
        $i++;
        if($auction->date != $lastdate){ $lastdate = $auction->date; ?>
            <tr>
                <td colspan="3" class="date"><?php echo date("l, m/d", strtotime($auction->date)); ?></td>
            </tr>
        <?php }
        ?>
    <tr <?php if ($i%2 == 1){echo "class='odd'";} ?>>
        <td class="col1"><?php echo $auction->company; ?></td>
        <td class="col2"><a href="<?php echo $auction->url;?>"><?php echo $auction->title; ?></a><br/><?php echo $auction->info;?></td>
        <td class="col3"><?php echo $auction->location;?></td>
    </tr>
    <?php } }?>
    </tbody>
</table>



