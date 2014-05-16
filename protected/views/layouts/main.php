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

    <meta name="description" content="Midwest Industrial Publication for Anything to do with industrial metalworking (forming and cutting) and upcoming Industrial Auctions."/>
    <meta name="keywords" content="Midwest, Michigan, Industrial, Auction, Advertiser, Advertisement, Advertising, Tooling, Spare Parts, Industrialtimesinc, Industrialtimes, Industrial times, Publication, market, marketing, AMCON Trade Show, metalworking, metalforming, metalcutting, fabrication, lathes, saws, band, grinders, CNC, debarring machine, horizontal mills and vertical mill, machine sales, magazine, publication, email, advertisement, advertising, marketing, auction, auctioneers "/>
    <meta name="author" content="Sari Rahal"/>
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/favicon4.png" type="image/x-icon" />

    <script type="" src="/js/jquery.js"></script>
    <script src="/js/global.js"></script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<style>
    .left_outer{
        z-index: 100;
        position: absolute;
        margin-left: -70px ;
        height: 125%;
        width:70px;
        background-image: url('/images/steel_border_flip.jpg');
    }
    .right_outer{
        z-index: 100;
        position: absolute;
        margin-left: 950px ;
        height: 125%;
        width:70px;
        background-image: url('/images/steel_border.jpg');
    }
</style>



<div class="container" id="page">
    <!--<div class="left_outer"></div>
    <div class="right_outer"></div>-->
    <img src="/images/banner/website_banner.jpg" width='950'/>
	<!--<div id="header">
		<div id="logo">
           <?php /*echo CHtml::encode(Yii::app()->name); */?>
        </div>
	</div>--><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'Auctions', 'url'=>array('/auctions')),
                array('label'=>'Auctioneers', 'url'=>array('/auctioneer')),
                array('label'=>'Publications', 'url'=>array('/index.php/issues')),
                array('label'=>'Advertisers', 'url'=>array('/advertisers')),
                array('label'=>'Media Guide', 'url'=>array('/site/media_guide')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Frequent Q&A', 'url'=>array('/questions')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Industrial Times Inc.<br/>
		All Rights Reserved.<br/>
		<?php /*echo Yii::powered(); */?>
        Designed & Programmed by Sari Rahal
	</div><!-- footer -->


</div><!-- page -->

</body>
</html>
