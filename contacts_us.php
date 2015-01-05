<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 12/23/14
 * Time: 8:51 AM
 */ ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CNC replacement parts and supplies.">
    <meta name="author" content="Sari Rahal">

    <title>Nu Tek Sales - Contact Us</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<?php include './templates/nav.php'; ?>
<div style="clear:both; height:30px;"></div>
<!-- Page Content -->
<div class="container">

    <div class="row">
        <br/>
        <div style="border:solid 4px #222222; width:508px; float: left; margin-right: 30px;">
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:500px;"><div id="gmap_canvas" style="height:500px;width:500px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">www.trivoo.net</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(43.0156484,-85.74980140000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(43.0156484, -85.74980140000002)});infowindow = new google.maps.InfoWindow({content:"<b>Nu Tek Sales</b><br/>3227 3 Mile Rd NW<br/>49534 Grand Rapids" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
        <div style="margin-top: -20px; width: 600px; float: left;">
            <h1>Contact Us</h1>
            <h3>
                Please feel free to contact us with any questions you may have about anything.
                All items are on site and can be inspected in real time.<br/>
                <br/>
                <div>
                    <table style="text-align: left;">
                        <tr>
                            <td style="padding-right: 10px;">Contact </td>
                            <td> : Ryan Rasikas</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td> : <a href="tel:6162590631">(616) 259-0631</a></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td> : <a href="mailto:RyanNuTek@live.com">RyanNuTek@live.com</a></td>
                        </tr>
                    </table>
                </div>
            </h3>
            <h1>Interested in related links?</h1>
            <h3>
                All companies are recommended duo to direct business with Nu Tek.<br/><br/>
                <a href="http://www.btmindustrial.com/">BTM Industrial</a><br/>
                <a href="http://www.btmbroker.com/index.php?ac=machine">BTM Broker</a><br/>
                <a href="http://industrialtimesinc.com/">Industrial Times Inc.</a><br/>
                <a href="http://www.midwaymachinerymovers.com/">Midway Machinery Movers</a><br/>
                <a href="http://www.usaindustrialscrap.com/">USA Industrial Scrap</a>
            </h3>
        </div>
        <div style="clear:both"></div>
    </div>
    <br/>

</div>
<!-- /.container -->



<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
<div>
    <?php include('./templates/footer.php'); ?>
</div>
</html>
