<?php
/* @var $this TeamController */
/* @var $model Team */

$this->breadcrumbs=array(
	'Teams'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Team', 'url'=>array('index')),
	array('label'=>'Create Team', 'url'=>array('create')),
);

?>

<h1>Manage Teams</h1>

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
$teams = Team::model()->findAll();



?>
<table id="table_id">
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Rd_1</td>
        <td>Rd_2</td>
        <td>Rd_3</td>
        <td>Rd_4</td>
        <td>Rd_5</td>
        <td>Rd_6</td>
        <td>Total</td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($teams as $team){ ?>
        <tr>
            <!--ID-->
            <td><?php echo $team['ID'];?></td>
            <!--Team-->
            <td><?php echo $team['name'];?></td>

            <td>Rd_1</td>
            <td>Rd_2</td>
            <td>Rd_3</td>
            <td>Rd_4</td>
            <td>Rd_5</td>
            <td>Rd_6</td>
            <td>total</td>
            <!--edit-->
            <td><a href="update/<?php echo $team['ID']; ?>">Edit</a></td>
        </tr>

    <?php } ?>

    </tbody>
</table>