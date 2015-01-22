<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 1/12/15
 * Time: 3:38 PM
 */

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<?php
$isMobile = (bool)preg_match('#\b(ip(hone|od|ad)|android|opera m(ob|in)i|windows (phone|ce)|blackberry|tablet'.
    '|s(ymbian|eries60|amsung)|p(laybook|alm|rofile/midp|laystation portable)|nokia|fennec|htc[\-_]'.
    '|mobile|up\.browser|[1-4][0-9]{2}x[1-4][0-9]{2})\b#i', $_SERVER['HTTP_USER_AGENT'] );
$_SESSION['isMobile'] = $isMobile;
if($isMobile){ ?>
    <link rel="stylesheet" type="text/css" href="/css/mobile.css" />
<?php } ?>

<header>
    <div class="navbar navbar-default navbar-static-top mobile_nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span>M</span>idway<span> M</span>achinery<span> M</span>overs<br/>
                <span class="blue-text">Machine Moving & Rigging</span><br/>
                <span class="blue-text">Contact Us : </span><span>(616) 608-7606</span></a>

            </div>
            <div class="mobile_nav_padding"></div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li class="<?php if (strpos($url, "index")!==false){ echo "active"; } ?>"><a href="index.php">Home</a></li>
                    <li class="<?php if (strpos($url, "about_us")!==false){ echo "active"; } ?>"><a href="about_us.php">About Us</a></li>
                    <li class="<?php if (strpos($url, "recent_work")!==false){ echo "active"; } ?>"><a href="recent_work.php">Recent Work</a></li>
                    <li class="<?php if (strpos($url, "pricing")!==false){ echo "active"; } ?>"><a href="pricing.php">Pricing</a></li>
                    <li class="<?php if (strpos($url, "contact")!==false){ echo "active"; } ?>"><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="col-sm-12 mobile_hidden" style="padding-bottom: 0px;">
                <div class="col-sm-2">
                    Plant Moving
                </div>
                <div class="col-sm-2">
                    Forklift Rentals
                </div>
                <div class="col-sm-2">
                    Heavy Hauling
                </div>
                <div class="col-sm-2">
                    After Hours Rigging
                </div>
                <div class="col-sm-2">
                    Hilo Lift Truck Rentals
                </div>
                <div class="col-sm-2">
                    And More
                </div>
            </div>
        </div>
    </div>

</header>