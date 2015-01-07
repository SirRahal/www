<?php
/* @var $this IssuesController */
/* @var $data Issues */
?>
<style>
    .cover{
        float: left;
        margin-left: 20px;;
        width: 210px;
        height : 150px;
    }
    .date_link{
        position: absolute;
        margin-top: -17px;
        margin-left: 250px;
    }
</style>
<?php
$temp = strlen($data->img);
$back_img = substr($data->img,0,$temp-4);
$back_img = $back_img . '_back.jpg';
$date = $data->date;
$date = date("M Y",strtotime($date));
?>

<div>
    <div class="cover issue" url="<?php echo $data->url;?>">
        <a href="<?php echo '/issues/'.$data->url; ?>" target="_blank">
            <img src="/images/covers/<?php echo $data->img;?>" width="100"/>
            <img src="/images/covers/<?php echo $back_img;?>" width="100"/><br/>
            <span style="margin-left: 60px;"><?php echo $data->date; ?></span>
        </a>
    </div>
</div>