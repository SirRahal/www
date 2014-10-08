<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 10/2/14
 * Time: 4:31 PM
 */ ?>

<style>
    .marquee {
        width: 100%;
        overflow: hidden;
        border: 1px solid #ccc;
        background: #ccc;
    }
</style>

<script type='text/javascript' src='//cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js'></script>


<?php
$current_date = date('Y-m-d');
$todays_auctions = Auctions::model()->findAllByAttributes(array('date'=>$current_date ) );
$latest_auctions = Auctions::model()->get_latest_auctions();
?>
<div class="marquee">
    <?php foreach($todays_auctions as $auction){ ?>
        <span style="margin-right: 110px;"><span style="color:#A31F34;">
                <b>Auction Ending Today</b>
            </span> : <?php echo $auction->company; ?> : <a href="<?php echo $auction->url; ?>"><?php echo $auction->title; ?></a></span>
    <?php } ?>
    <?php foreach($latest_auctions as $auction){ ?>
        <span style="margin-right: 110px;"><span style="color: #569cc7;"><b>NEW! Auction Posted</b></span> : <?php echo $auction->company; ?> : <a href="<?php echo $auction->url; ?>"><?php echo $auction->title; ?></a></span>
    <?php } ?>
</div>
<script>
    $('.marquee').marquee({
        pauseOnHover: true,
        duration: 10000
    });
</script>