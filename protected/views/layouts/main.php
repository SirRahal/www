<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery_ui.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui-custom/jquery-ui.css" />

    <script type="text/javascript" src="/js/jquery.freeow.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/freeow.css"/>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

<!--once they chose what they want and finalized, move to js folder -->
    <script>
        $(function() {
            $( document ).tooltip({
                items: " [div_popup]",
                content: function() {
                    var element = $( this );
                    if ( element.is( "[div_popup]" ) ) {
                        return "<img src='/images/ncaa-bracket.jpg'/>";
                    }
                }
            });
        });
        $(function() {
            $( ".tooltip" ).tooltip({
                show: null,
                position: {
                    my: "left top",
                    at: "left bottom"
                },
                open: function( event, ui ) {
                    ui.tooltip.animate({ top: ui.tooltip.position().top + 10 }, "fast" );
                }
            });
        });
    </script>
</head>
<body>
<!--pop up notification box-->
<div id="freeow" class="freeow freeow-top-middle smokey"></div>
<div class="container" id="page">

	<div id="header">
        <img src="/images/logo.png" width="700"/>
		<!--<div id="logo"><?php /*echo CHtml::encode(Yii::app()->name); */?></div>-->
        <!--bracket buttons example-->
        <div class="display_bracket_button">
            <a div_popup="" style=" text-decoration: none !important;">
                <div class="bracket_button">
                    <h3 style="color:#ffffff;">Display Bracket</h3>
                </div>
            </a>
        </div>
	</div><!-- header -->

	<div id="mainmenu">
        <?php
        if(Yii::app()->user->name)
        $display_name = Yii::app()->user->name;
        if(strlen($display_name) > 20){
            $display_name = substr($display_name,0,18);
            $display_name =$display_name.'...';
        }
        ?>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'My Tickets', 'url'=>array('/ticket/mytickets'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Schools', 'url'=>array('/school'), 'visible'=>Yii::app()->user->id == 'admin'),
                array('label'=>'Teams', 'url'=>array('/team'), 'visible'=>Yii::app()->user->id == 'admin'),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Games', 'url'=>array('/game'), 'visible'=>Yii::app()->user->id == 'admin'),
                array('label'=>'Users', 'url'=>array('/user'), 'visible'=>Yii::app()->user->id == 'admin'),
                array('label'=>'Tickets', 'url'=>array('/ticket'), 'visible'=>Yii::app()->user->id == 'admin'),
                array('label'=>'Team Placement', 'url'=>array('/tournamentresults'), 'visible'=>Yii::app()->user->id == 'admin'),
				array('label'=>$display_name, 'url'=>array(''),'linkOptions'=> array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ), 'visible'=>!Yii::app()->user->isGuest,
                        'items' => array(
                    array('label'=>'Edit User', 'url'=>array('/company/index')),
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
    Copyright &copy; <?php echo date('Y'); ?> by Bracket Fanatic.<br/>
    All Rights Reserved.<br/>
    Author By Sari Rahal
</div><!-- footer -->

</body>
</html>


