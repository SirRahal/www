<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<!-- DataTables CSS -->
<!--<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables2.css">

<!-- DataTables -->
<!--<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );


</script>-->

<!--<div style="float: left; width: 950px;">
    <img src="/images/bracket1.png" width="950">
</div>
<div style="float: left; width: 195px;margin-left: 5px;  padding-left: 5px; background: #efefef; border: solid 2px #9db2c9">
    <?php /*if(Yii::app()->user->isGuest) {*/?>
    <div class="display_box">
        <h3>Register My Ticket</h3>
        <p>Just bought your first ticket?  Create an account and get started</p>
        <a class="tooltip ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="padding: 5px; width:175px;" href="/index.php/user/register">Sign-Up</a>
    </div>
    <?php /*} */?>
    <div class="display_box">
        <h3>Rgistered Schools</h3>
        <table id="table_id" class="hover stripe row-border">
            <thead>
                <td>School</td>
                <td>Tickets</td>
            </thead>
            <?php
/*            $schools = School::model()->findAll();
            foreach($schools as $school){ */?>
                <tr data-href="/index.php/school/<?php /*echo $school->ID; */?>" class="link">
                    <td><?php /*echo $school->name; */?></td>
                    <td style="text-align: center;"><?php /*echo School::model()->get_ticket_count($school->ID); */?></td>
                </tr>
            <?php /*} */?>
        </table>
    </div>
</div>-->
<!--<script>
    $('tr').on("click", function() {
        if($(this).data('href') !== undefined){
            document.location = $(this).data('href');
        }
    });
</script>-->

<style>


</style>
<div class="homepage_container">
        <div class="orange_text title bold">RAISE $6,000</div>
        <div class="title2 bold">SCHOOLS | SPORTS PROGRAMS | BOOSTERS</div>
        <div class="orange_text bold">Sweepstakes is based on the Men’s College Hoops Tournament in March.</div>
        Your group distributes tickets printed with individual access codes to pick the teams you
        think will score the most points throughout the tournament.
    <div class="orange_text bold">23 CASH PRIZES ARE AWARDED!!!</div>
        <a class="tooltip ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="padding: 5px; width:250px;" href="/index.php/user/register">GET STARTED TODAY</a>

    <div>
        <img src="/images/home_page/fan_1.png" width="200"/>
        <img src="/images/home_page/fan_2.png" width="200"/>
        <img src="/images/home_page/fan_3.png" width="200"/>
        <img src="/images/home_page/fan_4.png" width="200"/>
        <img src="/images/home_page/fan_5.png" width="200"/>
    </div>
</div>