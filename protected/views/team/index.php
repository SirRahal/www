<?php
/* @var $this TeamController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Teams',
);

?>

<h1>Teams</h1>

<?php
$teams = Team::model()->findAll();



?>
<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">

<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
<table id="table_id">
    <thead>
    <tr>
        <td>Seed</td>
        <td>Name</td>
        <td>Rd 64</td>
        <td>Rd 32</td>
        <td>Rd 16</td>
        <td>Rd 8</td>
        <td>Rd 4</td>
        <td>Rd 2</td>
        <td>Total</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($teams as $team){
        $total_points = 0;
        $seed_info = $team->get_team_tournamet_region_info($team['ID']);
        ?>
        <tr>
            <td><?php echo $seed_info['seed'];?></td>
            <!--Team-->
            <td><?php echo $team['name'];?></td>

            <td><?php $total_points+= $team->get_scores($team['ID'],1); echo $team->get_scores($team['ID'],1);?></td>
            <td><?php $total_points+= $team->get_scores($team['ID'],2); echo $team->get_scores($team['ID'],2);?></td>
            <td><?php $total_points+= $team->get_scores($team['ID'],3); echo $team->get_scores($team['ID'],3);?></td>
            <td><?php $total_points+= $team->get_scores($team['ID'],4); echo $team->get_scores($team['ID'],4);?></td>
            <td><?php $total_points+= $team->get_scores($team['ID'],5); echo $team->get_scores($team['ID'],5);?></td>
            <td><?php $total_points+= $team->get_scores($team['ID'],6); echo $team->get_scores($team['ID'],6);?></td>

            <td><?php echo $total_points; ?></td>
        </tr>

    <?php } ?>

    </tbody>
</table>