<?php
/* @var $this AuctioneerController */
/* @var $data Auctioneer */
?>

<div class="view">
    <b><?php echo CHtml::encode($data->getAttributeLabel('auctioneer')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->auctioneer),array('view', 'id'=>$data->ID)); ?>
    <br />
    <div style="float: left; width: 50%;">
        <b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
        <?php echo CHtml::encode($data->address); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('zip')); ?>:</b>
        <?php echo CHtml::encode($data->zip); ?>
        <br />
    </div>
	<div>
        <b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
        <?php echo CHtml::encode($data->city); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
        <?php echo CHtml::encode($data->state); ?>
        <br />

    </div>
	<b><?php if($data->info != 'N/A') {
            echo CHtml::encode($data->getAttributeLabel('info')); ?>:</b>
	        <?php echo CHtml::encode($data->info);?>
    <br/>
    <?php }else{?> </b> <?php } ?>



</div>