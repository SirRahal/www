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
    <div class="right_side" style="position: absolute; margin-left: 720px; width: 200px;;"><!--right Col-->
        <div class="right_ads">
            <?php
            echo $this->renderPartial('/site/container/right_ads', array('type' => 'auction','amount' => 5));
            ?>
        </div>
    </div>
<?php
}
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
