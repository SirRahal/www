<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bracket Fanatic Fundraiser for public organizations">
    <meta name="author" content="Sari Rahal">
    <link href="/images/favicon.ico" rel="icon" type="image/x-icon" />

    <!--font type loade from google-->
    <link href="//fonts.googleapis.com/css?family=Bree+Serif:400" rel="stylesheet" type="text/css">

    <!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />


    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery_ui.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui-custom/jquery-ui.css" />

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.freeow.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/freeow.css"/>
    <!-- Magnific Popup core JS file -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/image_popup.js"></script>


    <!--Check to see if the user is a mobile device and use the correct styling sheet-->
    <?php
    $isMobile = (bool)preg_match('#\b(ip(hone|od|ad)|android|opera m(ob|in)i|windows (phone|ce)|blackberry|tablet'.
        '|s(ymbian|eries60|amsung)|p(laybook|alm|rofile/midp|laystation portable)|nokia|fennec|htc[\-_]'.
        '|mobile|up\.browser|[1-4][0-9]{2}x[1-4][0-9]{2})\b#i', $_SERVER['HTTP_USER_AGENT'] );
    $_SESSION['isMobile'] = $isMobile;
    if($isMobile){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mobile.css" />
    <?php } ?>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<!-- Page Content -->
<div class="container">
    <!--once they chose what they want and finalized, move to js folder -->
    <script>

        $(document).ready(function () {
            var du = 2000;
            $(document).tooltip({
                show: {
                    effect: 'slideDown'
                },
                track: true,
                open: function (event, ui) {
                    setTimeout(function () {
                        $(ui.tooltip).hide('explode');
                    }, du);
                }
            });
        });

    </script>

<body>
    <!--pop up notification box-->
    <div id="freeow" class="freeow freeow-top-middle smokey"></div>
    <div class="container" id="page">
        <?php if (!$isMobile) { ?>
        <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="position: fixed; float:right; right:10px;">
            <a class="a2a_button_facebook"></a><br/>
            <a class="a2a_button_twitter"></a><br/>
            <a class="a2a_button_google_plus"></a><br/>
            <a class="a2a_button_email"></a><br/>
            <a class="a2a_dd" href="https://www.addtoany.com/share_save?linkurl=BracketFanatic.com&amp;linkname=Bracket%20Fanatic"></a>
        </div>
        <?php } ?>
        <div id="header">
            <img src="/images/bflogo2.png" style="padding-top:10px; padding-bottom: 10px;"/>
            <!--<div id="logo"><?php /*echo CHtml::encode(Yii::app()->name); */?></div>-->
            <!--bracket buttons example-->
            <div class="display_bracket_button image-popup-no-margins" href="/images/bracket2.png" >
                <a div_popup="" style="text-decoration: none !important;">
                    <div class="bracket_button">
                        <h3 style="color:#ffffff;">Display Bracket</h3>
                        <a href="/images/bracket2.png" class="image-popup-no-margins" >
                            <img src="/images/bracket2.png" width="1" style="visibility: hidden;"/>
                        </a>
                    </div>
                </a>
            </div>
        </div><!-- header -->

        <script type="text/javascript">
            $('.image-popup-no-margins').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: false,
                showCloseBtn:false,
                mainClass: 'mfp-with-zoom', // class to remove default margin from left and right side
                image: {
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 400, // don't foget to change the duration also in CSS
                    easing: 'ease-in-out' // CSS transition easing function
                }
            });
            var a2a_config = a2a_config || {};
            a2a_config.linkname = "Bracket Fanatic";
            a2a_config.linkurl = "BracketFanatic.com";
        </script>
        <script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
        <!-- AddToAny END -->
        <div id="mainmenu">
            <?php
            if(Yii::app()->user->name)
                $display_name = ucfirst (User::model()->get_user_first_name());
            if(strlen($display_name) > 20){
                $display_name = substr($display_name,0,18);
                $display_name =$display_name.'...';
            }
            ?>
            <?php $this->widget('zii.widgets.CMenu',array(
                'encodeLabel' => false,
                'items'=>array(
                    array('label'=>'Home', 'url'=>array('/site/index')),
                    array('label'=>'Organizations', 'url'=>array('/site/page', 'view'=>'organizations' ),'visible'=>!$isMobile),
                    array('label'=>'Ticket Holders', 'url'=>array('/site/page', 'view'=>'ticket_holder')),
                    array('label'=>'My Tickets', 'url'=>array('/ticket/mytickets'), 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'Contact', 'url'=>array('/site/contact')),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'<span class="ui-icon ui-icon-circle-triangle-s icon"></span>'.$display_name, 'url'=>array(''),'linkOptions'=> array(
                        'class' => 'dropdown-toggle',
                        'data-toggle' => 'dropdown',
                    ), 'visible'=>!Yii::app()->user->isGuest,
                        'items' => array(
                            array('label'=>'Games', 'url'=>array('/game/admin'), 'visible'=>Yii::app()->user->id == 'admin'),
                            array('label'=>'Users', 'url'=>array('/user/admin'), 'visible'=>Yii::app()->user->id == 'admin'),
                            array('label'=>'Tickets', 'url'=>array('/ticket/admin'), 'visible'=>Yii::app()->user->id == 'admin'),
                            array('label'=>'Schools', 'url'=>array('/school'), 'visible'=>Yii::app()->user->id == 'admin'),
                            array('label'=>'Teams', 'url'=>array('/team/admin'), 'visible'=>Yii::app()->user->id == 'admin'),
                            array('label'=>'Team Knockout', 'url'=>array('/teamtournamentregion/teams'), 'visible'=>Yii::app()->user->id == 'admin'),
                            array('label'=>'Edit My Account', 'url'=>array('/user/update/'.User::model()->get_user_ID())),
                            array('label'=>'Log-out', 'url'=>array('/site/logout'))
                        ),
                    ),

                ),
            )); ?>
        </div><!-- mainmenu -->
        <div class="clear"></div>
        <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                )); ?><!-- breadcrumbs -->
        <?php endif?>
        <?php echo $content; ?>
        <br/>

        <div class="clear"></div>
    </div><!-- page -->
    <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?> by American Exposition, Inc.<br/>
        Bracket Fanatic - All Rights Reserved.<br/>
        Author Sari Rahal
    </div><!-- footer -->



</div>
</body>

</html>

