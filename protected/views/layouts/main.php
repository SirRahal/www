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

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
    <script src="/js/bootstrap.min.js"></script>
    <!--Check to see if the user is a mobile device and use the correct styling sheet-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
<div class="col-lg-12">
    <!--Menu-->







</div>



<?php if(isset($this->breadcrumbs)):?>
    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
<?php endif?>
<!-- page -->
<?php echo $content; ?>
<div class="clear"></div>

<div id="footer">
    Copyright &copy; <?php echo date('Y'); ?> by American Exposition, Inc.<br/>
    Bracket Fanatic - All Rights Reserved.<br/>
    Author Sari Rahal
</div><!-- footer -->



</body>

</html>

