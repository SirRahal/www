<?php
/* @var $this IssuesController */
/* @var $data Issues */
?>
<style>
    .cover{
        float: left;
        width: 210px;
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

<div class="view">
    <div class="cover issue" url="<?php echo $data->url;?>">
        <a href="<?php echo '/issues/'.$data->url; ?>" target="_blank">
        <img src="/images/covers/<?php echo $data->img;?>" width="100"/>
        <img src="/images/covers/<?php echo $back_img;?>" width="100"/>
    </div>
    </a>
    <div >
        <b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
        <div class="issue date_link" url="<?php echo $data->url;?>" >
            <?php echo CHtml::link(CHtml::encode($date), '/issues/'.$data->url, array('target'=>"_blank")); ?>
        </div>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('info')); ?>:</b>
        <?php echo CHtml::encode($data->info); ?>
        <br />

        <br />
    </div>
<div class="clear"></div>
</div>