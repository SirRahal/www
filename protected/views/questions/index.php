<?php
/* @var $this QuestionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Questions',
);

$this->menu=array(
	array('label'=>'Create Questions', 'url'=>array('create')),
	array('label'=>'Manage Questions', 'url'=>array('admin')),
);
?>

<h1>Questions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
