<?php
/* @var $this AuctioneerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Auctioneers',
);
?>
<h1>Auctioneers</h1>
<div style="position: absolute; color: #519bc5; margin-left: 300px; margin-top: -10px; text-align: center;">
    <b >Coming Soon!</b>
    <div >Search Function</div>
</div>
<?php
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'Create Auctioneer', 'url'=>array('create')),
	array('label'=>'Manage Auctioneer', 'url'=>array('admin')),
);}else
{?>
    <div class="banner"><!--right Col-->
        <img src="/images/banner/auctioneers_banner.png">
    </div>
<?php
}
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
