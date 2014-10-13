<?php
/* @var $this AuctionsController */
/* @var $data Auctions */
?>

<?php
if (isset(Yii::app()->session['last_date']))
{
    $last_date = Yii::app()->session['last_date'];
    if($last_date == $data->date){
        //do nothing
    }else{
        Yii::app()->session['last_date'] = $data->date;
?>
<div>
        <b><?php echo  date("l, m/d/Y", strtotime($data->date)) ?></b>
</div>
    <?php
    }
}else{
    Yii::app()->session['last_date'] = $data->date;
    ?>
    <div>
        <?php echo  date("l, m/d/Y", strtotime($data->date));?>
    </div>
<?php } ?>

<div class="view">
    <!--<div style="position: absolute;float: left; margin-left: 615px;">
        <b> <?php /*echo CHtml::encode($data->getAttributeLabel('clicks')); */?>:</b>
        <?php /*echo CHtml::encode($data->clicks); */?>
        <br />
    </div>
-->

    <div style="float: left; width: 80%;">

        <b><?php echo CHtml::link(CHtml::encode($data->company), array('auctioneer/view', 'id'=>$data->company_ID)); ?></b>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
        <?php echo CHtml::encode($data->title); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
        <div class="auction" style="position: absolute; margin-top: -17px; margin-left: 27px; width: 690px; height: 19px; overflow:hidden;" url="<?php echo $data->url; ?>">
            <?php echo CHtml::link(CHtml::encode($data->url), $data->url, array("target"=>"_blank")); ?>
        </div>
        <br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
        <?php echo CHtml::encode($data->location); ?>
        <br />

    </div>
    <div class="clear"></div>

    <b><?php echo CHtml::encode($data->getAttributeLabel('info')); ?>:</b>
    <?php echo CHtml::encode($data->info); ?>
    <br />
</div>

