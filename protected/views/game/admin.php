<?php
/* @var $this GameController */
/* @var $model Game */

$this->breadcrumbs=array(
	'Games'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Game', 'url'=>array('index')),
	array('label'=>'Create Game', 'url'=>array('create')),
);


?>

<h1>Manage Games</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

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
$games = Game::model()->findAll();

?>
<table id="table_id">
    <thead>
    <tr>
        <td>Round</td>
        <td>Team 1</td>
        <td>Team 2</td>
        <td>Date</td>
        <td>Location</td>
        <td></td>
    </tr>
    </thead>
    <tbody>
<?php foreach($games as $game){ ?>
    <tr>
        <!--round-->
        <td><?php echo $game['round'];?></td>
        <!--team1 (score1)-->
        <td><?php echo '('.$game['team_1_score'].') '.Team::model()->get_team_name($game['team_1_ID']);?></td>
        <!--team2 (score2)-->
        <td><?php echo '('.$game['team_2_score'].') '.Team::model()->get_team_name($game['team_2_ID']);?></td>
        <!--date time-->
        <td><?php echo date('m-d-Y', strtotime($game['date'])).' @ '.$game['time'];?></td>
        <!--location-->
        <td><?php echo $game['location'];?></td>
        <td><a href="update/<?php echo $game['ID']; ?>">Edit</a></td>
    </tr>

<?php } ?>

    </tbody>
</table>
