<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 4/18/14
 * Time: 12:15 PM
 */
?>
<html>
<body>
<div class="right_ads">
    <?php
    $temp = Ads::model()->select_ads(4,'normal');
    for($i=0;$i<4;$i++){?>
        <div class="ad">
            <a href="<?php echo $temp[$i]['url'];?>">
                <img src="/images/ad_images/<?php echo $temp[$i]['img_name'];?>">
            </a>
        </div>
    <br/>
    <?php
    }
    ?>
</div>
</body>
</html>