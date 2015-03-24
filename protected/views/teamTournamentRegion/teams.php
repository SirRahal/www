<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 3/23/15
 * Time: 7:08 PM
 */
?>

<h1>Teams</h1>
<h3><span style="color:red;">RED </span> means knocked out</h3>
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
        <td>Name</td>
        <td>Knocked Out</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($teams as $team){ ?>
        <tr <?php if($team->get_team_knockout_out($team['ID'])){ echo "style='color:red !important;'"; } ?>>
            <!--Team-->
            <td><?php echo $team['name'];?></td>
            <td><a href="updateknockout/<?php echo $team['ID'];?>">Update</a></td>
        </tr>

    <?php } ?>

    </tbody>
</table>