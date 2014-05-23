<style>
    .table_ele_1{
        width:130px;
    }
    .table_ele_2{
        width:476px;
    }
    .table_ele_3{
        width:100px;
        text-align: left;
    }
    .odd{
        background: #e4eff2;
    }
    .auction_div{
        margin-top: -18px;
        height: 350px;
        width:100%;
        overflow: scroll;
        overflow-x: hidden;
    }
</style>
<div>
    <table style="background:white url(/css/bg.gif) repeat-x left top; color: white;">
        <tr>
            <td class="table_ele_1">Auctioneer</td>
            <td class="table_ele_2">Info</td>
            <td class="table_ele_3">Location</td>
        </tr>
    </table>
</div>
<div class="auction_div">
    <?php
    $current_date = date('Y-m-d ');
    $last_date = '0000-00-00';
    $num_row = 1;

    $temp = Auctions::model()->select_upcoming_auctions();
    $i = 0;
    while(isset($temp[$i]['title']))
    {

        $row=$temp[$i];
        $company = $row['company'];
        $url = $row['url'];
        //$email = $row['email'];
        $title = $row['title'];
        $info = $row['info'];
        $date = $row['date'];
        $location = $row['location'];
        $company_ID = $row['company_ID'];
        $clicks = $row['clicks'];
        if( $date != $last_date){?>
            <div style="width: 100%; padding: 5px; font-size: 22px; text-align: center; color:#ededed; background: gray;">
                <?php $originalDate = $date; $newDate = date("l, m/d/Y", strtotime($originalDate)); echo $newDate;?>
            </div>
            <?php $last_date = $date; }?>
        <table style="margin-bottom: 0px;">
            <tr class="<?php if($num_row%2==1){$num_row++; echo "odd";}else{$num_row++;}?>">
                <td class="table_ele_1">
                    <div class="auction" url="<?php echo $url?>">
                        <a href="<?php echo '/index.php/auctioneer/'.$company_ID;?>">
                            <?php echo $company;?>
                        </a>
                        <br/>
                        <b>Clicks </b><?php echo $clicks;?>
                    </div>
                </td>
                <td class="table_ele_2 auction" url="<?php echo $url;?>"><b><a href="<?php echo $url;?>" target="_blank"><?php echo $title;?></a></b>
                    <br/>
                    <?php echo $info;?>
                </td>
                <td class="table_ele_3"><?php echo $location;?></td>
            </tr>
        </table>
    <?php
        $i++;}
    ?>
</div>