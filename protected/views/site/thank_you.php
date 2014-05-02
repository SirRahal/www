<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 4/29/14
 * Time: 9:01 AM
 */



$this->pageTitle=Yii::app()->name . ' - Thank You';
$this->breadcrumbs=array(
'Thank You',
);
?>
<h1>Thank You For Signing Up</h1>
<style>
    .bg_1{
        background: #519bc5;
    }
    .round_edges{
        border-radius: 10px;
    }
    .two_col{
        width:50%;
        text-align: center;
        float:left;
    }
</style>
<div style="padding: 20px;">
<br>

    <div class="bg_1 round_edges" style="padding:10px; font-size: 18px;text-align: center;">
        <?php if ($_GET['hard']=='yes'){?>
        <h3>Each issue is shipped out the first week of the month.</h3>
        <div style="margin-top: 20px;">
            <div style="margin-top: 10px; ">
                Shipping Options
            </div>
            <div class="two_col">
                <h3>Bulk</h3>
                <span>$10/6 months ($20/year)</span><br/>
                <span>$1.67/Issue</span>
            </div >
            <div class="two_col">
                <h3>First Class</h3>
                <span>$30/6 month ($60/year</span><br/>
                <span>$5/Issue</span>
            </div>
        </div>

        <h3> You will be contacted shortly by our custer service department.</h3>



<?php } else {?>
            <h2>You should see an email within a week.</h2>
            <h3>Email listings</h3>
            -Weekly Upcoming Auctions<br/>
            -Monthly New Issue and Upcoming Events<br/>
            -Random Large Events
        <?php }?>
    </div>
<div style="margin-top: 20px; font-size: 18px;">
    If you have any issues, please contact us.<br>
    Email : info@industrialtimesinc.com<br>
    phone : (616)-259-9110
</div>

</div>