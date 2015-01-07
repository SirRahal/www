<?php
/* @var $this IssuesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Publications',
);?>

<h1>Publications</h1>
<?php
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'Create Issues', 'url'=>array('create')),
	array('label'=>'Manage Issues', 'url'=>array('admin')),
);} else{?>
    <div class="right_side" style="position: absolute; margin-left: 720px; width: 200px;;"><!--right Col-->
        <div class="right_ads">
            <?php
            echo $this->renderPartial('/site/container/right_ads', array('type' => 'normal','amount' => 4));
            echo $this->renderPartial('/site/container/right_ads', array('type' => 'auction','amount' => 3));
            ?>
        </div>
    </div>

<?php } ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
