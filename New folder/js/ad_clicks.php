<?php

$var_dump($_POST['url']);


$clicks = 0;
$ad_url='';



$ad = Ads::model()->findByAttributes(array('url'=>$ad_url));
if(isset($ad)){
    $ad->clicks +=1;
    $ad->save();
}else{
    alert('error has occured');
}
