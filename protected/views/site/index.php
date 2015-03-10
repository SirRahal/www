<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<script>
    $(function() {
        $( "#dialog" ).dialog({
            autoOpen: false,
            width: 1100,
            modal: true,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            }
        });
        $( "#opener" ).click(function() {
            $( "#dialog" ).dialog( "open" );
        });
    });
</script>
<div id="dialog" title="Basic dialog">
    <div class="">
        <div class="video-div">
            <iframe width="1000" height="700" src="https://www.youtube.com/embed/YQTW0t3gO4c" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div class="main_title">
    <h1>Welcome to
        <i>
            <?php echo CHtml::encode(Yii::app()->name); ?>
        </i>
    </h1>
</div>
<div class="homepage_container">
    <div style="padding:20px;">
        <?php echo $this->renderPartial('/site/container/count_down'); ?>
    </div>
    <div class="orange_text title bold">Fundraiser Sweepstakes</div>
    <div class="over_lap_buttons">
        <a class="tooltip ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="padding: 5px; width:450px;" href="/index.php/user/register">Register Now</a>
        <a class="tooltip ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="padding: 5px; width:450px;" href="/index.php/site/page?view=ticket_holder">How To Play</a>
        <div style="padding: 10px;">
            <a id="opener" class="tooltip ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="padding: 5px; width:920px;">Watch Tutorial Video</a>
        </div>
    </div>
    <img src="/images/join_the_madness.png" width="1100" />
    <br/>
    <div style="margin-left: -5px;">
        <img src="/images/home_page/fan_1.png" width="271"/>
        <img src="/images/home_page/fan_2.png" width="270"/>
        <img src="/images/home_page/fan_3.png" width="270"/><!--
        <img src="/images/home_page/fan_4.png" width="200"/>-->
        <img src="/images/home_page/fan_5.png" width="271"/>
    </div>
</div>