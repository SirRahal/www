<?php
/* @var $this TournamentResultsController */
/* @var $model TournamentResults */

$this->breadcrumbs=array(
	'Tournament Results'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TournamentResults', 'url'=>array('index')),
	array('label'=>'Create TournamentResults', 'url'=>array('create')),
);

?>

<h1>Manage Tournament Results</h1>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>

<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
<br/>
<?php
$tournament_results = TournamentResults::model()->findAll();



?>
<table id="table_id">
    <thead>
    <tr>
        <td>ID</td>
        <td>TTR ID</td>
        <td>(ID) Team</td>
        <td>Region</td>
        <td>Placement</td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($tournament_results as $tournament_result){
        $TTR_ID = $tournament_result['team_tournament_region_ID'];
        $TTR = TeamTournamentRegion::model()->findByPk($TTR_ID);
        $team_ID = $TTR['team_ID'];
        $team = Team::model()->findByPk($team_ID);
        $team_name = $team['name'];
        $region_model = Region::model()->findByPk($TTR['tournament_region_ID']);
        $region = $region_model['Name'];

        ?>
        <tr>
            <!--ID-->
            <td><?php echo $tournament_result['ID'];?></td>
            <!--TTR ID-->
            <td><?php echo $tournament_result['team_tournament_region_ID'];?></td>
            <!--Team-->
            <td><?php echo '('.$team_ID.') '.$team_name;?></td>
            <!--Region-->
            <td><?php echo $region; ?></td>
            <!--Placment-->
            <td><?php echo $tournament_result['placement'];?></td>
            <!--edit-->
            <td><a href="update/<?php echo $tournament_result['ID']; ?>">Edit</a></td>
        </tr>

    <?php } ?>

    </tbody>
</table>
