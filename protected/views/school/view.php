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

$round1 = $model->get_round_placements($model->ID,1);
$round2 = $model->get_round_placements($model->ID,2);
$round3 = $model->get_round_placements($model->ID,3);
print_r($round1);
print_r($round2);
print_r($round3);

/*$tickets = $model->get_tickets($model->ID);*/
?>


I am trying to do a findAllByAttribute with a criteria, however I don’t know how to start.  I have a ‘ID’ and I would like to find all rows in table ‘tickets’ that have code that starts with ‘ID_’
exp
ID = 23 :   I would like to find tickets with the beginning code of  ‘23_’ the codes could be '23_f1d12' and i would still like to find it



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