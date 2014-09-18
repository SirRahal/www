<?php
/* @var $this SchoolController */
/* @var $model School */


$this->breadcrumbs=array(
	'My Tickets'=>array('ticket/mytickets'),
	$model->name,
);
?>
<head>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">

    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>


    <script>
        $(function() {
            $( "#accordion" ).accordion({
                heightStyle: "content"
            });
        });
        $(function() {
            $( "#ticket_view" ).dialog({
                autoOpen: false,
                draggable: false,
                height:550,
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
<h1>Organization : <i><?php echo $model->name; ?></i></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'state',
	),
));

$tickets = $model->get_tickets($model->ID);
$placement = 0;

?>


<div>
    <h3>23 Chances To Win!</h3>
    <table>
        <tr>
            <td>1st Place</td>
            <td></td>
        </tr>
        <tr>
            <td>2nd Place</td>
            <td></td>
        </tr>
        <tr>
            <td>3rd Place</td>
            <td></td>
        </tr>
        <tr>
            <td>Last Place</td>
            <td></td>
        </tr>
    </table>
</div>
<div class="clear"></div>
<h3>Please note that Winners are subject to change all the way up to the finals.</h3>
<div class="hint" style="margin-top:-15px;">Ties will be determined by final score of the whole tournament.</div>
<div id="accordion">
    <?php for($i=1;$i<7;$i++){
        if($i < 6)
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
            <tr>
                <?php foreach ($placement_round as $finalest){
                    $placement++;
                    if($placement == 1 && $round=="total_points"){ ?>
                        <td style="background: black;">
                            <div>
                                <p>Congratulations to all final winners.</p>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>1st</td>
                                        <td>$350</td>
                                    </tr>
                                    <tr>
                                        <td>2nd</td>
                                        <td>200</td>
                                    </tr>
                                    <tr>
                                        <td>3rd</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>4th</td>
                                        <td>50</td>
                                    </tr>
                                    <tr>
                                        <td>5th</td>
                                        <td>40</td>
                                    </tr>
                                    <tr>
                                        <td>6th</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td>Dead Last</td>
                                        <td>10</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                        <td style="width:0px; background: black; border-style: none;"></td>
                    <?php }
                    $user_name = User::model()->findByAttributes(array('ID'=>$finalest['user_ID'])); $user_name = $user_name['user_name'];
                    $picks = Picks::model()->find_tickets_by_ID($finalest['ID']);
                    ?>
                        <td>
                            <!--Ribbon-->
                            <div style="position:relative;">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon">
                                        <?php echo $model->get_placement_title($round,$placement); ?>
                                    </div>
                                </div>
                            </div>
                            <h3><b>User : </b><i><?php echo $user_name;?></i></h3>
                            <?php echo $this->renderPartial('/ticket/container/my_picks_div_round_display', array('picks' => $picks,'ticket_ID' => $finalest['ID'],'round' => $i));?>
                        </td>
                        <td style="width:0px; background: black; border-style: none;"></td>
                        <?php if($placement == 3 && $round=="total_points"){ ?>
                        </tr>
            <?php if($placement == 3){ ?>
            <tr><td colspan="8" style="height: 5px; background: black"></td></tr>

            <?php } ?> <tr>
                        <?php }
                     } $placement = 0; ?></tr>
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
                <td class="text_center"><b>Final Total</b></td>
            </tr>
        </thead>
        <tbody>
        <?php foreach($tickets as $ticket){

            $user_name = User::model()->findByAttributes(array('ID'=>$ticket['user_ID']));
            $user_name = $user_name['user_name'];
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
                <td style="text-align: center;"><?php echo $ticket['total_points']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>


<div id="ticket_view" title="Ticket Preview">
    <p>This is not available yet</p>
    
</div>
