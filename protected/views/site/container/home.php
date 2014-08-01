<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 4/18/14
 * Time: 12:10 PM
 */

?>
<html>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script src="/js/tab_scripts_function.js"></script>

    <style>
        .covers{
            float: left;
            width: 500px;
            height: 260px;
        }
        .cover_info{
            float: left;
            width: 170px;
        }
        .table_ele_1{
            width:130px;
        }
        .table_ele_2{
            width:476px;
        }
        .table_ele_3{
            width:100px;
            text-align: left;
        }

        .tri_div{
            margin-top: -20px;
            float: left;
            width: 200px;
            text-align: center;
        }
        .try_title{
            color: #519bc5;
            font-weight:bold;
            font-size: 18px;
            border-bottom: solid #519bc5;
            margin-top: -5px;;
        }
        .try_details{
            color: #666666;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<!--latest issue with information about it-->
<div>
    <div class="covers issue" url="<?php echo substr($this->url,8);?>">
        <a href="<?php echo $this->url;?>" target="_blank">
            <img src="<?php echo $this->img;?>"/>
            <img src="<?php echo $this->back_img;?>"/>
        </a>
    </div>
    <div class="cover_info">
        <b>Date: </b><?php echo date("M Y", strtotime($this->date));?>
        <br/>
        <b>Description: </b><?php echo $this->info;?>

    </div>
    <div class="clear"></div>
</div>

<!--4 tabs section-->
<section id="container"  >
<div class="tabs" style="margin-left: 10px;">
    <a href="javascript:{}" class="activeTab" tabSelector="tab1">Upcoming Auctions</a>
    <a href="javascript:{}" class="" tabSelector="tab2">What We Do</a>
    <a href="javascript:{}" class="" tabSelector="tab3">Circulation</a>
    <a href="javascript:{}" class="" tabSelector="tab4">How To Get Started</a>
</div>
<div class="tab_background">
    <!--tab 1-->
<div class="tabContent activeTab" id="tab1">
    <h3>Upcoming Auctions</h3>
        <?php echo $this->renderPartial('container/auctions');?>
    <div style="margin-top: 15px;">
        <button onClick="location.href='/index.php/auctions'">Click Here For Auctions</button>
        <button id="post_auction">Post Your Auctions</button>
    </div>
</div>
    <!--tab 2-->
<div class="tabContent" id="tab2">
    <h3>Need to reach out to your customers?</h3>
    <div style="margin-top: -7px;">
        <img src="/images/media_kit/networking_image.png" width="350" style="float: right; opacity: .2;">
    </div>
    <div style="width: 600px; position: absolute; margin-top: 4px;">
        <p style="font-size: 20px;">
            Have a company or upcoming event in the Industrial Metalworking business? Contact us to start reaching out to your customers. Industrial Times offers advertising opportunities to
            metalworking companies and related services in
            the Midwest/Great Lakes Region. We mail a
            monthly, full-color publication, to an established list of end users/decision makers you need to reach.
            <br/>
            <br/>
            We offer advertising opportunities in our Publication, Website, and Email Blasts
        </p>
        <div>
            <div class="tri_div">
                    <span class="try_title">
                        Publication
                    </span>
                <br/>
                <div class="try_details">
                        <span class="try_details">
                            Cover, Inner-Covers,<br/>
                            2-page spread - 1/4th page <br/>
                            spread each month
                        </span>
                </div>
            </div>
            <div class="tri_div">
                <span class="try_title">Website</span>
                <br/>
                <div class="try_details">
                        <span class="try_details">
                            Column, Banner &<br/>
                            Upcoming Auction listing<br/>
                            soon wanted items listing
                        </span>
                </div>
            </div>
            <div class="tri_div">
                <span class="try_title">Email</span>
                <br/>
                <div class="try_details">
                        <span class="try_details">
                            Digital copy of our publication, upcoming auctions, and other industrial advertisments.
                        </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearboth"></div>
    <div style="margin-top: 340px;">
        <button style="width:197px;" onclick="location.href='/index.php/site/media_guide'" >More About What We Offer</button>
    </div>
</div>
    <!--tab 3-->
<div class="tabContent" id="tab3">
    <h3>Who We Target!</h3>
    <div style=" font-size: 20px; height: 400px;">
        Industrial Times is a monthly publication serving the Midwest’s Metalworking Community. The Midwest Region has long been the cornerstone of the United States manufacturing industry. Our publication is distributed to over 28,000 qualified decision makers in Michigan, Illinois, Indiana, Ohio, Wisconsin, and parts of Missouri, Minnesota, Pennsylvania, Kentucky and Iowa. We have developed our direct mailing list to include the decision makers in companies primarily engaged in either metal cutting or the metal forming segments.
        <br/><br/>
        <div class="tri_div" style="float: right; margin-top: -20px;">
            <span class="try_title">This Includes:</span>
            <br/>
            <div class="try_details">
                        <span class="try_details">
                            • Contract Manufacturers<br/>
                            • Fabrication Specialists<br/>
                            • Job Shops<br/>
                            • Machine Shops<br/>
                            • Original Equipment Manufacturers<br/>
                            • Stamping
                        </span>
            </div>
        </div>
        <div class="tri_div" style="width:400px; margin-top: -20px;">
            <span class="try_title">Break Down:</span>
            <br/>
            <div class="try_details">
                        <span class="try_details">
                            Industrial Times (IT) prints 20,000 copies of our publication each month, 15,000 of which are sent via mail, the remaining 5,000 sent out through specialized direct distribution.  We also distribute our publication via email blast to all of our signed up members.
                        </span>
            </div>
        </div>
        <div class="clearboth"></div>
    </div>
    <div style="z-index: 5">
        <!--<button class="newssignup_open button" style="width:197px; z-index: 100;">Join Our Free Circulation</button>-->
        <button style="width:197px;" onclick="location.href='/index.php/customers/create'">Sign-up Free Internet Copy</button>
        <button style="width:197px;" onclick="location.href='/index.php/customershardcopy/create'">Sign-up Hard Copy $1.67/m</button>

    </div>

    <img src="/images/media_kit/midwest.png" style="position: absolute; opacity: .2; width: 480px; margin-top: -410px; margin-left: 50px;">
</div>
<!--tab 4-->
<div class="tabContent" id="tab4">
    <h3>To Get Started</h3>
    <div style="padding-top: 10px; font-size: 20px;">
        All you need is an idea.  Contact us and we can help create and move your idea forward.  With our resources we can help your idea become a reality and into your customers hands.  Give us a Call or Email us to begin!
        <br/>
        <br/>
        <div >
                    <span class="try_title">
                        Phone
                    </span>
            <br/>
            <div class="try_details">
                        <span class="try_details">
                            (616)-259-9110
                        </span>
            </div>
        </div>
        <div >
            <span class="try_title">Email</span>
            <br/>
            <div class="try_details">
                        <span class="try_details">
                            info@IndustrialTimesInc.com
                        </span>
            </div>
        </div>
        <div>
            <span class="try_title">Address</span>
            <br/>
            <div class="try_details">
                        <span class="try_details">
                            1930 Fuller NE Suite B.<br/>
                            Grand Rapids Mi. 49505
                        </span>
            </div>
        </div>
        <img src="/images/icons/logo_large.png" style="float: right; margin-top: -350px; opacity:.2;" width="360">
    </div>
</div>

</div>
</section>




</body>
</html>