<?php
/* @var $this AdvertisersController */
/* @var $data Advertisers */
?>

<div class="view">

	<!--<b><?php /*echo CHtml::encode($data->getAttributeLabel('ID')); */?>:</b>
	<?php /*echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); */?>
	<br />
-->
	<b><?php echo CHtml::encode($data->getAttributeLabel('company')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->company), array('view', 'id'=>$data->ID)); ?>
	<br />

    <div style="float: left; width: 50%;">
        <b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
        <?php echo CHtml::encode($data->category); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
        <?php echo CHtml::encode($data->state); ?>
        <br />
    </div>
    <div>
        <b><?php echo CHtml::encode($data->getAttributeLabel('zip')); ?>:</b>
        <?php echo CHtml::encode($data->zip); ?>
        <br />


        <b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
        <?php echo CHtml::encode($data->url); ?>
        <br />
    </div>
    <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('phone1')); ?>:</b>
	<?php echo CHtml::encode($data->phone1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone2')); ?>:</b>
	<?php echo CHtml::encode($data->phone2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone3')); ?>:</b>
	<?php echo CHtml::encode($data->phone3); ?>
	<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('first')); ?>:</b>
	<?php echo CHtml::encode($data->first); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('last')); ?>:</b>
	<?php echo CHtml::encode($data->last); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
    <?php echo CHtml::encode($data->phone); ?>


	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


	*/ ?>

</div>