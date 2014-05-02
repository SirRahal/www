<?php
$clicks = 0;
$issue_url='';
$issue_url = $_POST['url'];

require('../dbconf.inc');
$connect = db_connect();
$qry = "SELECT * FROM issues WHERE url = '".$issue_url."'";
$result = mysqli_query($connect,$qry);
if($result){
    while($row = mysqli_fetch_array($result))
    {
        $clicks = $row['clicks']+1;
        $qry = "UPDATE issues SET clicks=$clicks WHERE url = '".$issue_url."'";
        $result2 = mysqli_query($connect, $qry);
    }
}
