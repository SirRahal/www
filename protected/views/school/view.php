<?php
/* @var $this SchoolController */
/* @var $model School */


$this->breadcrumbs=array(
	'My Entries'=>array('ticket/mytickets'),
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
                height:620,
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
<div class="mobile_hidden">
    <div style="float: left; width: 400px;">


        <div style="font-size: 20px;">
            <?php $this->widget('zii.widgets.CDetailView', array(
            'data'=>$model,
            'attributes'=>array(
                'name',
                'address',
                'city',
                'state',
                'zip',
                'contact_name',
                'phone',
                'email',
            ),
        ));

        $tickets = $model->get_tickets($model->ID);
        $placement = 0;

        ?>
        </div>
    </div>
    <div  style="padding-right : 10px; float:right;">
        <img class="round_edges shadow" src="/images/23hor.png" >
    </div>
</div>
<div class="clear"></div>
    <div style="padding:20px;">
        <h1>Please note that Winners are subject to change all the way up to the finals.</h1>
        <div class="hint" style="margin-top:-15px;">Ties will be determined by the score in the previous round.  These placements are not final till the end of the turnament. </div>
    </div>


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
            <tr>
                <?php foreach ($placement_round as $finalest){
                    $placement++;
                    if($placement == 1 && $round=="total_points"){ ?>
                        <td style="background: black;">
                            <div>
                                <img src="/images/pay_outs.png">
                            </div>
                        </td>
                        <td style="width:0px; background: black; border-style: none;"></td>
                    <?php }
                    $user_name = User::model()->findByAttributes(array('ID'=>$finalest['user_ID']));
                    $user_name = $user_name['last_name'].', '.$user_name['first_name'];
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
<h1>All Entries</h1>
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
                <td class="text_center"><b>Final Total</b></td>
            </tr>
        </thead>
        <tbody>
        <?php foreach($tickets as $ticket){

            $user = User::model()->findByAttributes(array('ID'=>$ticket['user_ID']));
            $user_name = ucfirst ($user['last_name']);
            $user_name = $user_name .', '.ucfirst ($user['first_name']);
            $placement = $ticket['placement'];
            $prev_placement = $ticket['prev_placement'];
            $placement_difference = $prev_placement - $placement;
            ?>
            <tr>
                <td class="text_center round_total" ><?php echo $placement; ?>
                <td class="text_center round_total"><i>
                    <?php if ($placement_difference > 0){
                        echo '+'.$placement_difference; ?> <img src="/images/600px-Green_Arrow_Up.png" width="10"/>
                    <?php }elseif($placement_difference < 0){
                        echo "&nbsp;".$placement_difference; ?> <img src="/images/red_arrow_down.png" width="10"/>
                    <?php } ?>
                    </i>
                </td>
                </td>
                <td><div class="ticket_viewer tooltip" style="cursor: pointer" id="<?php echo $ticket['ID']; ?>" title="Click to preview their entry"><?php echo $user_name; ?></div></td>
                <td class="round_total"><?php echo $ticket['rd_1']; ?></td>
                <td class="round_total"><?php echo $ticket['rd_2']; ?></td>
                <td class="round_total"><?php echo $ticket['rd_3']; ?></td>
                <td class="round_total"><?php echo $ticket['rd_4']; ?></td>
                <td class="round_total"><?php echo $ticket['rd_5']; ?></td>
                <td class="round_total"><?php echo $ticket['rd_6']; ?></td>
                <td class="round_total"><?php echo $ticket['total_points']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>


<div id="ticket_view" title="Entry Preview">
    <p>This is not available yet</p>
    
</div>
