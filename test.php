
<?php //do nothing; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/jquery.mobile-1.4.5.min.css">
    <script src="/jquery/jquery.mobile/demos/js/jquery.js"></script>
    <script src="/jquery/jquery.mobile/demos/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-panel-page" data-quicklinks="true">



<!-- Note: all other panels are at the end of the page, scroll down  -->

<div data-role="header" class="jqm-header">
    <div>
        <a href="#leftpanel2" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-mini">Push</a>
    </div>
</div><!-- /header -->

<div role="main" class="ui-content jqm-content">

//this is where the page goes

</div><!-- /panel -->


<!-- TODO: This should become an external panel so we can add input to markup (unique ID) -->
<div data-role="panel" class="jqm-search-panel" data-position="right" data-display="overlay" data-theme="a">


test where is this?


</div><!-- /panel -->




<!-- leftpanel2  -->
<div data-role="panel" id="leftpanel2" data-position="left" data-display="push" data-theme="a">

    <a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ui-btn-inline">Close panel</a>

</div><!-- /leftpanel2 -->


</div><!-- /page -->

</body>
</html>
