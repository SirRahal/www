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
            <div style="width:50%; float:left;">
                <br/>
                <h3 class="h3_margin_bot">Circulation</h3>
                <span>Industrial Times is a monthly publication serving the Midwest’s Metalworking Community. The Midwest Region has long been the cornerstone of the United States manufacturing industry.  Our publication is distributed to over 28,000 qualified decision makers in Michigan, Illinois, Indiana, Ohio, Wisconsin, and parts of Missouri, Minnesota, Pennsylvania, Kentucky and Iowa.  We have developed our direct mailing list to include the decision makers in companies primarily engaged in either metal cutting or the metal forming segments.</span>
                <br/><br/>
                <h3>This includes:</h3>
                <div style="margin-left: 20px;">
                    • Contract Manufacturers<br/>
                    • Fabrication Specialists<br/>
                    • Job Shops<br/>
                    • Machine Shops<br/>
                    • Original Equipment Manufacturers<br/>
                    • Stamping<br/>
                </div>
                <p>
                <h3>Break Down</h3>
                Industrial Times (IT) prints 20,000 copies of our publication each month, 15,000 of which are sent via mail, the remaining 5,000 sent out through specialized direct distribution.
                </p>
            </div>
            <div style="float: left;">
                <img src="/images/media_kit/mags.png">
            </div>
            <div class="clear"></div>
            <div>

            </div>
            <div style="width:60%; float: left;">
                <img src="/images/media_kit/page_pricing.png" width="500">
                <img src="/images/media_kit/premium_pricing.png" width="442"  style="margin-top: 10px;">
            </div>
            <div style="width:30%; float: left; margin-top: 40px;">
                <div >
                    <img src="/images/media_kit/size1.png">
                </div>
                <div class="clear"></div>
                <div >
                    <img src="/images/media_kit/size6.png">
                </div>
                <div>
                    <img src="/images/media_kit/size2.png">
                    <img src="/images/media_kit/size3.png"><br/>
                </div>
                <div class="clear"></div>
                <img src="/images/media_kit/size4.png">
                <img src="/images/media_kit/size5.png">
            </div>
            <div class="clear"></div>
            <!--<div>
                <h3>Requirements:<h3>
                <div style="border: solid black; width: 500px; padding:5px;">
                    We request that all finished advertisements be submitted as PDF files.<br/><br/>
                    All PDF files must come in CMYK Color format with true (100%) black.<br/><br/>
                    <b>FOUR COLOR BLACK IS NOT ACCEPTABLE.</b><br/><br/>
                    Setup costs may apply to all ads that must be created by Industrial Times.  This does not apply to camera-ready ads.<br/><br/>
                    Industrial Times is not responsible for any color inaccuracies or incorrect information once a final advertisement is approved and submitted.<br/>
                </div>
            </div>-->





        </div>
        <!--tab 2-->
        <div class="tabContent" id="tab2">

            <div class="indent">
                <p>
                    At the moment we offer three different types of advertisements on our website.  With the rapid growth of the company, there is more to come.
                    <br/>
                    <h3>1) Auctioneer and Auction Listing</h3>
                        First is our most popular, <a href="/index.php/auctioneer">Auctioneers</a> and <a href="/index.php/auctions">Upcoming Auctions</a> listing. This provides an organized list of upcoming auctions, giving potential bidders a resource to find metalworking auctions. This listing is displayed on our Home and Auction page as well as email blasted the week of the auction.  A digital copy of Industrial Times is emailed blasted at the beginning of each month, giving more exposure to the auction listings. Below is an example of an auctioneer and auction listing.
                    <br/>
                <!--view of the auctioneer-->
                    <div class="view" style="border: dashed #519bc5">
                        <b>Auctioneer:</b><a href="/index.php/auctioneer/0">Industrial Times Inc</a>
                        <br>
                        <div style="float: left; width: 59%;">
                            <b>Address:</b>1930 Fuller NE Suite B
                            <br>
                            <b>Zip:</b>49505
                            <br>
                        </div>
                        <div>
                            <b>City:</b>Grand Rapids<br>
                            <b>State:</b>MI<br>
                        </div>
                        <b>Info:</b> We are your #1 stop for everything industrial.  We offer a large range of advertising opportunities along with information on upcoming events.  Sign up for our publication or weekly emails for quick and easy updates.	<br>
                    </div>
                <!--view of the auctioneer-->
                <!--view of auction-->
                <div class="view" style="border: dashed #519bc5">
                    <div style="position: absolute;float: left; margin-left: 509px;">
                        <b> Clicks:</b>98
                        <br>
                    </div>
                    <b>Company:</b>
                    <a href="/index.php/auctioneer/0">Industrial Times Inc</a>
                    <br>
                    <div style="float: left; width: 60%;">
                        <b>Title:</b>FREE Indutrial Auction
                        <br>
                        <b>Url:</b><a href="http://www.indutrialtimesinc.com">http://www.indutrialtimesinc.com</a>
                        <br>
                    </div>
                    <div>
                        <b>Date:</b>04/30/2014
                        <br>
                        <b>Location:</b>Grand Rapids MI
                        <br>
                    </div>
                    <br>
                    <b>Info:</b>
                    This is an example of an upcoming auction.  This will show up on the site as well as emailed 2 times: the month of, and beginning of the week.    <br>
                </div>
                <!--view of auction-->
                <div style="text-align: center;">
                    <h3>Auctioneer and Auction Listing combined flat rate <span style="color:#324990">- $25</span></h3>
                </div>

                <h3>2) Side Ad</h3>
                </p>
                <div style="margin-left:100px;">
                    <div style="width:250px; float: left;">
                        <img class="round_edges shadow" src="/images/ad_images/place_your_ad_here.jpg" width="216" >
                    </div>
                    <div style="width: 400px; float: left;">
                        These ads are displayed on the right side of all our pages. The advertisements are categorized to display on the corresponding pages. These ads are buttons that send the user to your site, upcoming event, or even a specific lot you have for sale.
                        These ads can be submitted, or our in-house designer can create one with the proper information and images.
                    </div>
                </div>
                <div class="clear"></div>

                <br/>
                <h3 style="text-align: center;">
                    Price Per Month
                </h3>

                <div class="page_pricing" style="margin-left: 163px;">
                    Home Page Side Ad<br/>
                    <span style="color:#324990">
                        1x - $200<br/>
                        3x - $150<br/>
                    </span>
                </div>

                <div class="page_pricing">
                    All other pages:<br/>
                    <div >
                        <span style="color:#324990">
                            1x - $100<br/>
                            3x - $50<br/>
                        </span>
                    </div>
                </div>
                <div class="clear"></div>
                <p>
                    <h3>3) Banner Ad</h3>
                    Our banner ads are limited to one per page.  They are located at the bottom of each page and can be designed by you or our in-house designer. Please see the bottom of this page for an example.
                <br/>
                </p>
                <div class="clear" style="height: 10px;"></div>
                <div>
                    <img src="/images/ad_images/web_page_banner.jpg" style="width: 100%;">
                </div>
            </div>
            <br/>
            <h3 style="text-align: center;">
                Price Per Month<br/>
                Banner Ad<br/>
                    <span style="color:#324990">
                        1x - $300<br/>
                        3x - $250<br/>
                    </span>
            </h3>
            <div class="page_pricing" style="margin:0 auto;">

            </div>


        </div>
        <!--tab 3-->
        <div class="tabContent" id="tab3">


            <div >
                <h3>
                    What We Offer
                </h3>
                <div>
                We offer email marketing through our industrial clientele list.  You can create an ad, or have our in house designer create an ad for your company to be sent out to 8,000 of our customers.  Our ads are directed strictly to the Industrial market place to ensure that our customers get only what they want.  We offer our customers as much control over their advertisement as possible including the body of the email, subject line, from email, and reply email address.
                </div>
                    <br/>
                <br/>
                <div style="width:300px;">
                    <h3>
                        Results
                    </h3>
                        After the ad is sent out, we wait one week for the results. The results consist of the number of emails that were sent, bounced, opened, marked as spam, unsubscribed, and how many links were clicked on in the email.
                        We take good care of our clientele to ensure that our contact list stays as prestigious as possible.  We do share all of our results to our clients and customers with specific detail.

                <br/>
                <br/>
                <h3>What We Do</h3>
                We send out two types of emails:<br> Monthly, and Weekly.<br/><br/>
                </div>
                <div class="clear"></div>
                <div style=" width: 465px; float:right;margin-right: 10px; margin-top: -280px;">
                    <img width="261" style="float: right;" src="../../images/media_kit/email_upcoming_auctions.png">
                    <img width="200" src="../../images/media_kit/email_monthly_issue.png">
                </div>
                <div style="width:300px; float: left;">
                    Our monthly emails are sent to help promote all of the monthly events.  It starts with a digital copy of the publication for the month. Customers can turn each page and click on the hyperlinks of each of our advertisers to go directly to their website.  <br/>This email also contains all the listed events for the month.
                    <br/>
                    <br/>
                    The weekly email is sent out every Monday at noon to promote all metalworking auctions going on for the week.  This allows our customers to keep a running list of auctions they want to take part in.
                </div>

                <div class="clear"></div>
                <br/>
                <h3>
                    Our Results
                </h3>
                <div style="width:300px;float: left;">
                    Here are the results of our latest weekly email of March 24th 2014 to the right.  We send out 8,105 emails to insure that we hit our 8,000 quota.  Of those 8,000 emails, 1034 were opened by our customers.  Of those customers, 222 people clicked on links in the email to direct them to our advertisers sites.
                    <br/><br/>
                    <h3>
                        Pricing
                    </h3>
                    Standard one time email to all of our customers is
                    <h3  style="text-align: center; margin-top: 10px; color: #324990">$600</h3>
                    <h3>
                        Get Started
                    </h3>
                    All you have to do is contact us, and we'll get you on the right track.  Our team can get your ideas down on paper, and create exactly what you need to move forward.

                    <div class="clear"></div>
                </div>
                <div style="float:right; width: 500px;  ">
                    <img style="border-top-left-radius:40px; border-top-right-radius:40px;" width="500" src="../../images/media_kit/emails_sent.png">
                    <img width="500" src="../../images/media_kit/emails_opened.png">
                    <img width="500" src="../../images/media_kit/emails_clicks.png">
                </div>

                <div class="clear" style="height: 10px;"></div>

            </div>
        </div>
    </div>
</section>









































