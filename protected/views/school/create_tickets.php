<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 12/18/14
 * Time: 3:54 PM
 */

$school = School::model()->findByPk($id);
?>


<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
<script>
    function addtickets(school_ID) {
        $.ajax({
            type: "POST",
            url: '<?php echo Yii::app()->createUrl('school/createTickets'); ?>',
            data: {school_ID : school_ID},
            success: function(){
                $("#freeow").freeow("Tickets were Created!", "Please refresh the page and the tickets will display blow!");
            }, error : function(){
                $("#freeow").freeow("There Was an Error!", "Please Contact Sari and don't move anything!", {classes : ["error"]});
            }
        })
    }
</script>
<h1>Are you sure you would like to create 1,000 tickets for <b><?php echo $school['name']; ?></b>?</h1>

<button onclick="addtickets(this.id)" id="<?php echo $id;?>">Yes</button>

<?php
$tickets = $school->get_tickets($school->ID);
?>



<br/>
<h1>All Tickets</h1>
<div>
    <table class="hover stripe row-border">


        <thead>
        <tr style="background: #9db2c9;">
            <td><b>#</b></td>
            <td><b>ID</b></td>
            <td><b>Code</b></td>
        </tr>
        </thead>
        <tbody>
        <?php
        $count = 0;
        foreach($tickets as $ticket){
            $count++;
            ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $ticket['ID']; ?></td>
                <td><?php echo $ticket['code']; ?></td>
            </tr>
         <?php } ?>
        </tbody>
    </table>
</div>