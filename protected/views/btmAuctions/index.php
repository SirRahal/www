<?php
/* @var $this BtmauctionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Btm Auctions',
);


?>

<h1>Btm Auctions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
