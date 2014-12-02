<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users',
);



?>
<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
<h1>Manage Users</h1>
<div class="spacer"></div>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>
<div class="clear"></div>
<a href="/index.php/user/create">Create User</a>
<?php
    $users = User::model()->findAll();
?>
<style>
    tbody{
        color:black;
    }
</style>
<table id="myTable" class="hover stripe row-border">
    <thead>
    <tr>
        <td>Edit</td>
        <td>ID</td>
        <td>First</td>
        <td>Last</td>
        <td>Type</td>
        <td>User Name</td>
        <td>Password</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user){ ?>
        <tr>
            <td ><a class="link" href="/index.php/user/update/<?php echo $user->ID; ?>">Edit</a> <a class="link" href="/index.php/user/delete/<?php echo $user->ID; ?>">Delete</a></td>
            <td><?php echo $user->ID; ?></td>
            <td><?php echo $user->first_name; ?></td>
            <td><?php echo $user->last_name; ?></td>
            <td><?php echo $user->permission; ?></td>
            <td><?php echo $user->user_name; ?></td>
            <td><?php echo $user->password; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>