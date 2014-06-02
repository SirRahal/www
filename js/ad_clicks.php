<?php

$ad_url='';
$ad_url = $_POST['url'];

$ad = Ads::model()->findByAttributes(array('url'=>$ad_url));
if(isset($ad)){
    $ad->clicks +=1;
    $ad->save();
}
