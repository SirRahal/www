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

<div>
    <?php
    $temp = Ads::model()->select_ads($amount,$type);
    $i = 0;
    while(isset($temp[$i])){?>
        <div class="ads ad" url="<?php echo $temp[$i]['url']?>">
            <a href="<?php echo $temp[$i]['url']?>" target="_blank">
                <img src="/images/ad_images/<?php echo $temp[$i]['img_name'];?>">
            </a>
        </div>
    <br/>
    <?php $i++;
    }
    ?>
</div>
</body>
</html>