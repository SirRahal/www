<?php
/* @var $this AuctionsController */
/* @var $data Auctions */
?>


<div class="view">
    <div style="position: absolute;float: left; margin-left: 625px;">
        <b> <?php echo CHtml::encode($data->getAttributeLabel('clicks')); ?>:</b>
        <?php echo CHtml::encode($data->clicks); ?>
        <br />
    </div>


    <div style="float: left; width: 60%;">

        <b><?php echo CHtml::encode($data->getAttributeLabel('company')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->company), array('auctioneer/view', 'id'=>$data->company_ID)); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
        <?php echo CHtml::encode($data->title); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
        <div class="auction" style="position: absolute; margin-top: -17px; margin-left: 27px;" url="<?php echo $data->url; ?>">
            <?php echo CHtml::link(CHtml::encode($data->url), $data->url, array("target"=>"_blank")); ?>
        </div>
        <br />

    </div>
    <div style="">
        <b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
        <?php echo date("m/d/Y", strtotime(CHtml::encode($data->date))); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
        <?php echo CHtml::encode($data->location); ?>
        <br />
    </div>
<br/><br/>
    <b><?php echo CHtml::encode($data->getAttributeLabel('info')); ?>:</b>
    <?php echo CHtml::encode($data->info); ?>
    <br />
</div>