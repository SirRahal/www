<?php
/* @var $this BtmauctionController */
/* @var $model BBtmauction*/

$this->breadcrumbs=array(
	'Btm Auctions'=>array('index'),
	$model->name=>array('view','id'=>$model->ID),
	'Update',
);


?>

<h1>Update BtmAuctions <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>