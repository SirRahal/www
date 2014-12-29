<?php
/* @var $this TicketController */
/* @var $model Ticket */

$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	'Manage',
);

?>

<h1>Manage Tickets</h1>

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
$tickets = Ticket::model()->findAll();



?>
<table id="table_id">
    <thead>
    <tr>
        <td>User</td>
        <td>Code</td>
        <td>Rd_1</td>
        <td>Rd_2</td>
        <td>Rd_3</td>
        <td>Rd_4</td>
        <td>Rd_5</td>
        <td>Rd_6</td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($tickets as $ticket){
        $user = User::model()->findByAttributes(array('ID'=>$ticket['user_ID']));
        $user_name = ucfirst ($user['first_name']).' '.ucfirst($user['last_name']);
        ?>
        <tr>
            <!--User-->
            <td><?php echo '('.$ticket['user_ID'].') '.$user_name;?></td>
            <!--Ticket Code-->
            <td><?php echo $ticket['code'];?></td>
            <!--round 1 score-->
            <td><?php echo $ticket['rd_1'];?></td>
            <!--round 1 score-->
            <td><?php echo $ticket['rd_2'];?></td>
            <!--round 1 score-->
            <td><?php echo $ticket['rd_3'];?></td>
            <!--round 1 score-->
            <td><?php echo $ticket['rd_4'];?></td>
            <!--round 1 score-->
            <td><?php echo $ticket['rd_5'];?></td>
            <!--round 1 score-->
            <td><?php echo $ticket['rd_6'];?></td>

            <td><a href="update/<?php echo $ticket['ID']; ?>">Edit</a></td>
        </tr>

    <?php } ?>

    </tbody>
</table>