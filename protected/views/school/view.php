<?php
/* @var $this SchoolController */
/* @var $model School */


$this->breadcrumbs=array(
	'Schools'=>array('index'),
	$model->name,
);



?>

<h1>Organization : <i><?php echo $model->name; ?></i></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'state',
	),
));



$tickets = $model->get_tickets($model->ID);

foreach($tickets as $ticket){
    echo 'ticket is : '.$ticket['ID'];
}
?>


