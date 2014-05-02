<?php
/* @var $this AuctionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Auctions',
);


?>

<h1>Auctions</h1>
<div class="main_container" style="width:100%;">

<?php
    $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
<?php
    if(!Yii::app()->user->isGuest){
    $this->menu=array(
    array('label'=>'Create Auctions', 'url'=>array('create')),
    array('label'=>'Manage Auctions', 'url'=>array('admin')),
    );
    }else{?>
    <div class="right_side" style="position: absolute; margin-left: 720px; width: 200px;;"><!--right Col-->
        <div class="right_ads">
            <?php
            echo $this->renderPartial('/site/container/right_ads', array('type' => 'auction','amount' => 5));
            ?>
        </div>
    </div>

<?php } ?>