<?php
/* @var $this AuctioneerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Auctioneers',
);
?>
<h1>Auctioneers</h1>
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
