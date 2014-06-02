<?php
$auction_url='';
$auction_url = $_POST['url'];

require('../dbconf.inc');
$connect = db_connect();
$qry = "SELECT * FROM auctions WHERE url = '".$auction_url."'";
$result = mysqli_query($connect,$qry);
if($result){
    while($row = mysqli_fetch_array($result))
    {
        $clicks = $row['clicks']+1;
        $qry = "UPDATE auctions SET clicks=$clicks WHERE url = '".$auction_url."'";
        $result2 = mysqli_query($connect, $qry);
    }
}


$ad_url='';
$ad_url = $_POST['url'];

$auction = Auctions::model()->findByAttributes(array('url'=>$auction_url));
if(isset($auction)){
    $auction->clicks +=1;
    $auction->save();
}