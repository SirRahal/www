<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 10/13/14
 * Time: 3:39 PM
 */
$model = School::model()->findByPk($id);
$ID = $model->ID;
$name = $model->name;
$contact_name = $model->contact_name;
$email = $model->email;
$address = $model->address;
$city = $model->city;
$state = $model->state;
$zip = $model->zip;
$phone = $model->phone;
$this->breadcrumbs=array(
    'Schools'=>array('.'),
    $model->name,
); ?>

<head>
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
    <script>
        $(function() {
            $( "#ticket_view" ).dialog({
                autoOpen: false,
                draggable: false,
                height:585,
                show: {
                    effect: "drop",
                    duration: 1000
                },
                hide: {
                    effect: "drop",
                    duration: 1000
                }
            });
            $( ".ticket_viewer" ).click(function() {
                var ticket_id = $(this).attr('id');
                $('#ticket_view').load('ticketPopup/'+ticket_id);
                $( "#ticket_view" ).dialog( "open" );
            });
        });
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
</head>
<div class="view">
    <table>
        <tbody>
        <tr>
            <td style="width:20%;"><b>School ID</b></td>
            <td style="width:30%;"><?php echo $ID; ?></td>
            <td><b>Contact</b></td>
            <td><?php echo $contact_name; ?></td>
        </tr>
        <tr>
            <td><b>School:</b></td>
            <td><?php echo $name; ?></td>
            <td><b>Email:</b></td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td><b>Mailing</b></td>
            <td><?php echo $address; ?><br/><?php echo $city.', '.$state.' '.$zip; ?></td>
            <td><b>Phone :</b></td>
            <td><?php echo $phone; ?></td>
        </tr>
        </tbody>
    </table>
</div>
<?php
$tickets = $model->get_tickets($model->ID);
$placement = 0;
?>
<br/>
<div class="clear"></div>
<div id="accordion">
    <?php for($i=1;$i<6;$i++){
        if($i < 5)
        {
            $round = 'rd_'.$i;
            $header= "Final Round ".$i." Winners";
        } else{
            $round = 'total_points';
            $header= "Final Round Winners";
        }
        $placement_round = $model->get_round_placements($model->ID, $round);
        ?>
        <h1><?php echo $header; ?></h1>
        <div>
            <table style="background: #e6e6e6; color:#555555;">
                <tbody>
                <thead style="background: #494949; color:#fff;">
                    <td>Place</td>
                    <td>Name</td>
                    <td>User Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                </thead>
                <tr>
                    <?php
                    $placement = 0;
                    foreach ($placement_round as $finalest){
                    $placement++;
                    $user =  User::model()->findByAttributes(array('ID'=>$finalest['user_ID']));
                    $user_ID = $user['ID'];
                    $user_name = $user['user_name'];
                    $first_name = $user['first_name'];
                    $last_name = $user['last_name'];
                    $email = $user['email'];
                    $phone = $user['phone'];
                    $picks = Picks::model()->find_tickets_by_ID($finalest['ID']);
                    if($round != 'total_points'){
                        if($placement == 4)
                            $placement = 'last';
                    }elseif($placement == 7)
                        $placement = 'last';
                    ?>
                    <td><?php echo $placement; ?></td>
                    <td><?php echo $first_name . ' '. $last_name; ?></td>
                    <td><?php echo $user_name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone; ?></td>
                </tr>
                <tr>
                    <?php }
                     ?></tr>
                </tbody>
            </table>
        </div>
    <?php } ?>

</div>

<br/>
<h1>All Tickets</h1>
<div>
    <table id="table_id" class="hover stripe row-border">


        <thead>
        <tr>
            <td class="text_center"><b>Place</b></td>
            <td class="text_center"><b>Change</b></td>
            <td class="text_center"><b>User</b></td>
            <td class="text_center"><b>Round 1 Total</b></td>
            <td class="text_center"><b>Round 2 Total</b></td>
            <td class="text_center"><b>Round 3 Total</b></td>
            <td class="text_center"><b>Round 4 Total</b></td>
            <td class="text_center"><b>Round 5 Total</b></td>
            <td class="text_center"><b>Round 6 Total</b></td>
            <td class="text_center"><b>Final Total</b></td>
        </tr>
        </thead>
        <tbody>
        <?php foreach($tickets as $ticket){

            $user_name = User::model()->findByAttributes(array('ID'=>$ticket['user_ID']));
            $user_name = ucfirst ($user_name['user_name']);
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
<div id="ticket_view" title="Ticket Preview">
    <p>This is not available yet</p>
</div>