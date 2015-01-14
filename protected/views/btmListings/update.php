<?php
/* @var $this BtmListingsController */
/* @var $model BtmListings */

$this->breadcrumbs=array(
	'Update',
);


?>

<h1>Update BtmListings <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>