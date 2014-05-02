<?php
/* @var $this AuctioneerController */
/* @var $model Auctioneer */

$this->breadcrumbs=array(
	'Auctioneers'=>array('index'),
	$model->auctioneer,
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'List Auctioneer', 'url'=>array('index')),
	array('label'=>'Create Auctioneer', 'url'=>array('create')),
	array('label'=>'Update Auctioneer', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Auctioneer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Auctioneer', 'url'=>array('admin')),
);}
?>

<h1>View Auctioneer <i><?php echo $model->auctioneer; ?></i></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'address',
		'city',
		'state',
		'zip',
		'info',
        array(
            'label'=>'URL',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->url), $model->url ,array("target"=>"_blank"))
        )
	),
)); ?>


<br/>
<h2>Auctions listed below</h2>

<?php
$current_date = time()-(60*60*24);
$i=0;
while(isset($model->auctions[$i]['title'])){
    /*if($current_date < strtotime($model->auctions[$i]['date']))
    {*/?>
    <div class="auction" url="<?php echo $model->auctions[$i]['url'];?>" style="margin-bottom: -15px; text-align: center;">
        <h4><a href="<?php echo $model->auctions[$i]['url'];?>" target="_blank"><?php echo $model->auctions[$i]['title'] ;?></a></h4>
    </div>
    <div style="position: absolute; margin-left: 625px;margin-top: 3px;">
        <b>Clicks </b><?php echo $model->auctions[$i]['clicks'];?>
    </div>
    <?php
$this->widget('zii.widgets.CDetailView', array(
    'data'=>$model->auctions[$i],
    'attributes'=>array(
        'date',
        'location',
        'info'
    ),
));?>
        <br/>
    <?php /*}*/
    $i++;}
    ?>







