<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/shop-homepage.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>


    <!--Check to see if the user is a mobile device and use the correct styling sheet-->
    <?php
    $isMobile = (bool)preg_match('#\b(ip(hone|od|ad)|android|opera m(ob|in)i|windows (phone|ce)|blackberry|tablet'.
        '|s(ymbian|eries60|amsung)|p(laybook|alm|rofile/midp|laystation portable)|nokia|fennec|htc[\-_]'.
        '|mobile|up\.browser|[1-4][0-9]{2}x[1-4][0-9]{2})\b#i', $_SERVER['HTTP_USER_AGENT'] );
    if($isMobile){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mobile.css" />
    <?php } ?>


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" >

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">BTM-NTS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">


                    <?php if (Yii::app()->user->name != 'Guest') { ?>
                        <!--All listers-->
                        <li>
                            <a href="/index.php/listings/admin">All Listings</a>
                        </li>
                        <li>
                            <a href="/index.php/user/<?php echo User::model()->findByPk(User::model()->get_user_ID())->ID; ?>">My Listings</a>
                        </li>
                        <?php if(Yii::app()->user->name != 'Guest' && User::model()->findByPk(User::model()->get_user_ID())->permission > 1){ ?>
                            <!--Ebay listters menu-->
                            <li>
                                <a href="/index.php/listings/not_on_ebay">Listings Not On Ebay</a>
                            </li>
                            <li>
                                <a href="/index.php/listings/on_ebay">Listings On Ebay</a>
                            </li>
                            <li>
                                <a href="/index.php/listings/sold">Sold Items</a>
                            </li>
                            <!--BTM auctions menu-->
                            <li>
                                <a href="/index.php/btmauctions/admin">Auctions</a>
                            </li>
                        <?php } ?>
                        <?php if(Yii::app()->user->name != 'Guest' && User::model()->findByPk(User::model()->get_user_ID())->permission > 2){ ?>
                            <!--Admin menus-->
                            <li>
                                <a href="/index.php/user/admin">Users</a>
                            </li>
                        <?php } ?>
                        <!--logged In-->
                        <li>
                            <a href="/index.php/site/logout">Logout <?php echo ucfirst (Yii::app()->user->name); ?></a>
                        </li>
                    <?php } else { ?>
                        <!--Not logged in-->
                        <li>
                            <a href="/index.php/site/login">Login</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">

        <?php echo $content; ?>

    </div>


	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Sari rahal.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->


</body>
</html>
