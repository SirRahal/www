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
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
<h1>Are you sure you would like to create 1,000 tickets for <b><?php echo $school['name']; ?></b>?</h1>

<button onclick="addtickets(this.id)" id="<?php echo $id;?>">Yes</button>

<?php
$tickets = $school->get_tickets($school->ID);
?>



<br/>
<h1>All Tickets</h1>
<div>
    <table id="table_id" class="hover stripe row-border">


        <thead>
        <tr>
            <td class="text_center"><b>Place</b></td>
            <td class="text_center"><b>Change</b></td>
            <td class="text_center"><b>User</b></td>
            <td class="text_center"><b>Round 1</b></td>
            <td class="text_center"><b>Round 2</b></td>
            <td class="text_center"><b>Round 3</b></td>
            <td class="text_center"><b>Round 4</b></td>
            <td class="text_center"><b>Round 5</b></td>
            <td class="text_center"><b>Round 6</b></td>
            <td class="text_center"><b>Final</b></td>
        </tr>
        </thead>
        <tbody>
        <?php foreach($tickets as $ticket){

            $user = User::model()->findByAttributes(array('ID'=>$ticket['user_ID']));
            $user_name = ucfirst ($user['first_name']).' '.ucfirst($user['last_name']);
            $placement = $ticket['placement'];
            $prev_placement = $ticket['prev_placement'];
            $placement_difference = $prev_placement - $placement;
            ?>
            <tr>
                <td class="text_center" ><?php echo $placement; ?>
                <td class="text_center"><i>
                        <?php if ($placement_difference > 0){
                            echo '+'.$placement_difference; ?> <img src="/images/600px-Green_Arrow_Up.png" width="10"/>
                        <?php }elseif($placement_difference < 0){
                            echo "&nbsp;".$placement_difference; ?> <img src="/images/red_arrow_down.png" width="10"/>
                        <?php } ?>
                    </i>
                </td>
                </td>
                <td><div class="ticket_viewer tooltip" style="cursor: pointer" id="<?php echo $ticket['ID']; ?>" title="Click to preview their ticket"><?php echo $user_name; ?></div></td>
                <td style="text-align: center;"><?php echo $ticket['rd_1']; ?></td>
                <td style="text-align: center;"><?php echo $ticket['rd_2']; ?></td>
                <td style="text-align: center;"><?php echo $ticket['rd_3']; ?></td>
                <td style="text-align: center;"><?php echo $ticket['rd_4']; ?></td>
                <td style="text-align: center;"><?php echo $ticket['rd_5']; ?></td>
                <td style="text-align: center;"><?php echo $ticket['rd_6']; ?></td>
                <td style="text-align: center;"><?php echo $ticket['total_points']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>