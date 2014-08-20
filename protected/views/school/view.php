<?php
/* @var $this SchoolController */
/* @var $model School */


$this->breadcrumbs=array(
	'My Tickets'=>array('ticket/mytickets'),
	$model->name,
);
?>
<head>
    <script>
        $(function() {
            $( "#accordion" ).accordion({
                heightStyle: "content"
            });
        });
    </script>
</head>

<h1>Organization : <i><?php echo $model->name; ?></i></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'state',
	),
));

$tickets = $model->get_tickets($model->ID);
$placement = 0;

?>

<style>
    tr, td {
        border: 1px solid #acacac;
    }
</style>
<br/>
<div class="clear"></div>

<div id="accordion">
    <?php for($i=1;$i<7;$i++){
        if($i < 6)
        {
            $round = 'rd_'.$i;
            $header= "Final Round ".$i." Winners";
        } else{
            $round = 'total_points';
            $header= "Final Round Winners";
        }
        $placement_round = $model->get_round_placements($model->ID, $round);
        ?>
    <h1><?php echo $header; ?></h1>
        <div>


        <table style="background: #e6e6e6; color:#555555;">
            <tbody>
            <tr>
                <?php foreach ($placement_round as $finalest){
                    $placement++;
                    $user_name = User::model()->findByAttributes(array('ID'=>$finalest['user_ID'])); $user_name = $user_name['user_name'];
                    $picks = Picks::model()->find_tickets_by_ID($finalest['ID']);
                    ?>
                        <td>
                            <b>User : </b><i><?php echo $user_name;?></i><br/>
                            <b>Spot : </b><i><?php if ($placement == 1) { echo '1st'; }elseif($placement == 2) { echo '2nd'; }elseif($i==6 && $placement ==3){echo '3rd';}else { echo 'Dead Last'; } ?></i><br/>
                            <?php echo $this->renderPartial('/ticket/container/my_picks_div_round_display', array('picks' => $picks,'ticket_ID' => $finalest['ID'],'round' => $i));?>
                        </td>
                    <?php  } $placement = 0; ?></tr>
            </tbody>
        </table>
        </div>
    <?php } ?>

</div>

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
        <?php $i=0; foreach($tickets as $ticket){
            $i++;
            $placement++; $user_name = User::model()->findByAttributes(array('ID'=>$ticket['user_ID'])); $user_name = $user_name['user_name']; ?>
            <tr <?php if ($i%2 == 0){echo 'style="background : #cdd2db;"';} else { echo 'style="background : #f9f1e0;"';} ?> >
                <td style="text-align: center; width:20px;"><?php echo $placement; ?></td>
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

