<?php
/* @var $this ListingsController */
/* @var $data Listings */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_by')); ?>:</b>
	<?php echo CHtml::encode($data->list_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inventory')); ?>:</b>
	<?php echo CHtml::encode($data->inventory); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('internal_number')); ?>:</b>
	<?php echo CHtml::encode($data->internal_number); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacturer')); ?>:</b>
	<?php echo CHtml::encode($data->manufacturer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial_number')); ?>:</b>
	<?php echo CHtml::encode($data->serial_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model_number')); ?>:</b>
	<?php echo CHtml::encode($data->model_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('more_info')); ?>:</b>
	<?php echo CHtml::encode($data->more_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condition')); ?>:</b>
	<?php echo CHtml::encode($data->condition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condition_info')); ?>:</b>
	<?php echo CHtml::encode($data->condition_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('length_1')); ?>:</b>
	<?php echo CHtml::encode($data->length_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('width_1')); ?>:</b>
	<?php echo CHtml::encode($data->width_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('height_1')); ?>:</b>
	<?php echo CHtml::encode($data->height_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dims_2')); ?>:</b>
	<?php echo CHtml::encode($data->dims_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('length_2')); ?>:</b>
	<?php echo CHtml::encode($data->length_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('width_2')); ?>:</b>
	<?php echo CHtml::encode($data->width_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('height_2')); ?>:</b>
	<?php echo CHtml::encode($data->height_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listing_note')); ?>:</b>
	<?php echo CHtml::encode($data->listing_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ebay_listed')); ?>:</b>
	<?php echo CHtml::encode($data->ebay_listed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ebay_lister')); ?>:</b>
	<?php echo CHtml::encode($data->ebay_lister); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ebay_date')); ?>:</b>
	<?php echo CHtml::encode($data->ebay_date); ?>
	<br />

	*/ ?>

</div>