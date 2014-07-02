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
$placment = 0;
?>

<style>
    tr, td {
        border: 1px solid #acacac;
    }
</style>
<br/>
<h1>Round 1 Finalest</h1>
<br/>
<h1>Round 2 Finalest</h1>
<br/>
<h1>Round 3 Finalest</h1>
<br/>
<h1>Round 4 Finalest</h1>
<br/>
<h1>Round 5 Finalest</h1>
<br/>
<h1>Final Round Winners</h1>





<br/>
<h1>All Tickets</h1>
<div style="background: #e6e6e6;">
    <table>
        <tbody>
        <tr style="background: #acacac;">
            <td style="text-align: center;"><b>Placement</b></td>
            <td style="text-align: center;"><b>User</b></td>
            <td style="text-align: center;"><b>Round 1 Total</b></td>
            <td style="text-align: center;"><b>Round 2 Total</b></td>
            <td style="text-align: center;"><b>Round 3 Total</b></td>
            <td style="text-align: center;"><b>Round 4 Total</b></td>
            <td style="text-align: center;"><b>Round 5 Total</b></td>
            <td style="text-align: center;"><b>Final Total</b></td>
        </tr>
        <?php foreach($tickets as $ticket){
            $placment++; $user_name = User::model()->findByAttributes(array('ID'=>$ticket['user_ID'])); $user_name = $user_name['user_name'] ?>
            <tr>
                <td style="text-align: center; width:20px;"><?php echo $placment; ?></td>
                <td><?php echo $user_name; ?></td>
                <td style="text-align: center;"><?php echo $ticket['rd_1']; ?></td>
                <td style="text-align: center;"><?php echo $ticket['rd_2']; ?></td>
                <td style="text-align: center;"><?php echo $ticket['rd_3']; ?></td>
                <td style="text-align: center;"><?php echo $ticket['rd_4']; ?></td>
                <td style="text-align: center;"><?php echo $ticket['rd_5']; ?></td>
                <td style="text-align: center;"><?php echo $ticket['total_points']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>


