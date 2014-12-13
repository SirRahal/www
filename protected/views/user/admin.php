<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);

?>

<h1>Manage Users</h1>


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
$users = User::model()->findAll();

?>
<table id="table_id">
    <thead>
    <tr>
        <td>ID</td>
        <td>First</td>
        <td>Last</td>
        <td>Email</td>
        <td>Tickets</td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($users as $user){ ?>
        <tr>
            <!--ID-->
            <td><?php echo $user['ID'];?></td>
            <!---->
            <td><?php echo $user['first_name'];?></td>
            <!---->
            <td><?php echo $user['last_name'];?></td>
            <!---->
            <td><?php echo $user['email'];?></td>
            <!---->
            <td><?php echo $user['phone'];?></td>
            <!---->
            <td><a href="update/<?php echo $user['ID']; ?>">Edit</a></td>
    <?php } ?>

    </tbody>
</table>

