<?php
/* @var $this QuestionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Frequently Asked Questions',
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'Create Questions', 'url'=>array('create')),
	array('label'=>'Manage Questions', 'url'=>array('admin')),
);}else{?>
    <div class="banner" style="margin-top: 27px;"><!--right Col-->
        <img src="/images/banner/frequentlyaskedquestions_banner.png">
    </div>
<?php }
?>

<h1>Frequently Asked Questions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
