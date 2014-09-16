<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 4/18/14
 * Time: 1:12 PM
 */

$this->pageTitle=Yii::app()->name . ' - Media Guide';
$this->breadcrumbs=array(
    'Media Guide',
);
?>
<h1>Media Guide</h1>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="/js/tab_scripts_function.js"></script>
<style>
    .page_pricing{
        font-size: 18px;
        float: left;
        width:30%;
        text-align: center;
    }
</style>

<!--4 tabs section-->
<section id="container">
    <div class="tabs" style="margin-left: 10px;">
        <a href="javascript:{}" class="activeTab" tabSelector="tab1">Monthly Publication</a>
        <a href="javascript:{}" class="" tabSelector="tab2">Online Advertising</a>
        <a href="javascript:{}" class="" tabSelector="tab3">Email Marketing</a>
    </div>
    <div class="tab_background">
        <!--tab 1-->
        <div class="tabContent activeTab" id="tab1">
            <img src="/images/media_kit/new_media_guide1.jpg">
        </div>
        <!--tab 2-->
        <div class="tabContent" id="tab2">
            <img src="/images/media_kit/new_media_guide2.jpg">
        </div>
        <!--tab 3-->
        <div class="tabContent" id="tab3">
            <img src="/images/media_kit/new_media_guide3.jpg">
        </div>
    </div>
</section>









































