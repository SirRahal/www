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

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#game-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Games</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'game-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'tournament_ID',
		'date',
		'time',
		'location',
		'team_1_ID',
		/*
		'team_2_ID',
		'team_1_score',
		'team_2_score',
		'round',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
<br/>
<?php
$games = Game::model()->findAll();

?>
<table>
    <thead>
    <tr>
        <td>Round</td>
        <td>Team 1</td>
        <td>Team 2</td>
        <td>Date</td>
        <td>Location</td>
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
        <td><?php echo $game['date'].' @ '.$game['time'];?></td>
        <!--location-->
        <td><?php echo $game['location'];?></td>
    </tr>

<?php } ?>

    </tbody>
</table>
