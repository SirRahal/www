<?php
/* @var $this SchoolController */
/* @var $model School */


$this->breadcrumbs=array(
	'Schools'=>array('index'),
	$model->name,
);



?>

<h1>School : <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'state',
	),
));

$round1 = $model->get_round_placements($model->ID,1);
$round2 = $model->get_round_placements($model->ID,2);
$round3 = $model->get_round_placements($model->ID,3);
print_r($round1);
print_r($round2);
print_r($round3);
?>



Print out users, and ticket scores order by most points.
<br/>
Round 1
print out first, second, and last place
<br/>
Round 2
print out first, second, and last place
<br/>
Round 3
print out first, second, and last place
<br/>
Round 4
print out first, second, and last place
<br/>
Round final
print out first, second, third, and last place
<br/>

Print out full roster