<?php
$auction_url = 'http://auctions.btmindustrial.com/Monthly-Machinery-Auction_as34229';
$date = 'November 19th';
$auction_title = 'Monthly Machinery Auction';

$info = array();

$info[0][0]="http://auctions.btmindustrial.com/auction.aspx?a=22395&as=34229&p=1&ps=50#i20788727";$info[0][1]="http://media.liveauctiongroup.net/i/22395/20788727_1s.jpg?v=8D1CAEB22DB3FF0";$info[0][2]="Apls Tool Lathe Bar Feed";
$info[1][0]="http://auctions.btmindustrial.com/auction.aspx?a=22395&as=34229&p=1&ps=50#i20887205";$info[1][1]="http://media.liveauctiongroup.net/i/22395/20887205_1s.jpg?v=8D1C7A5DB9BC260";$info[1][2]="6 Ton Denison";
$info[2][0]="http://auctions.btmindustrial.com/auction.aspx?a=22395&as=34229&p=1&ps=50#i20887207";$info[2][1]="http://media.liveauctiongroup.net/i/22395/20887207_1s.jpg?v=8D1C7A5DB9BC260";$info[2][2]="Taft Pierce Grinder";
$info[3][0]="http://auctions.btmindustrial.com/auction.aspx?a=22395&as=34229&p=1&ps=50#i20887095";$info[3][1]="http://media.liveauctiongroup.net/i/22395/20887095_1s.jpg?v=8D1C7A5DB9BC260";$info[3][2]="10''x80'' LeBlond Lathe";
$info[4][0]="http://auctions.btmindustrial.com/auction.aspx?a=22395&as=34229&p=1&ps=50#i20887097";$info[4][1]="http://media.liveauctiongroup.net/i/22395/20887097_1s.jpg?v=8D1CFA6932AD850";$info[4][2]="G&L PC50 CNC HBM";
$info[5][0]="http://auctions.btmindustrial.com/auction.aspx?a=22395&as=34229&p=1&ps=50#i20887098";$info[5][1]="http://media.liveauctiongroup.net/i/22395/20887098_1s.jpg?v=8D1C7A5DB9BC260";$info[5][2]="40''x80'' Morton CNC";
$info[6][0]="http://auctions.btmindustrial.com/auction.aspx?a=22395&as=34229&p=1&ps=50#i20887203";$info[6][1]="http://media.liveauctiongroup.net/i/22395/20887203_1s.jpg?v=8D1C7A5DB9BC260";$info[6][2]="1998 Johnford CNC Vertical Machining Center";
$info[7][0]="http://auctions.btmindustrial.com/auction.aspx?a=22395&as=34229&p=1&ps=50#i20893400";$info[7][1]="http://media.liveauctiongroup.net/i/22395/20893400_1s.jpg?v=8D1C7A5DB9BC260";$info[7][2]="Mazak Slant Turn Universal 10 CNC Lathe";
$info[8][0]="http://auctions.btmindustrial.com/auction.aspx?a=22395&as=34229&p=1&ps=50#i21032561";$info[8][1]="http://media.liveauctiongroup.net/i/22395/21032561_1s.jpg?v=8D1CDEDFCAF22F0";$info[8][2]="Cincinnati-Milacron Sabre 750 VMC";

$count=0;
?>


<!--banner part-->
<div style="background-color: #333333; text-align: center; margin: 0px auto;">
    <p style="text-align: center;"><img alt="" src="https://media.campaigner.com/accountsmedia/43/437480/e44b703963d1447dbbd582b624092692.png" style="text-align: center; width: 615px; height: 78px; border-width: 0px; border-style: solid;"></p>
    <p style="text-align: center; font-size: 26px;">
        <font color="#ffffff">
            <?php echo $auction_title;?>
            <br/>
            Ending <?php echo $date;?> @ 1pm EST
            <br>
            No Reserves, Everything Will Sell To The Highest Bidder.
            <br/>
    </p>
    <strong>
        </font></strong>
    <div style="margin: 0px auto; background-color: #494949; color: #008000; font-size: 27px;">
            <span contenteditable="false" c2f="true"  type="LINK" >
                <a href="<?php echo $auction_url; ?>" style="color: #cccccc;" target="_blank">
                    Click Here for Auction Listing
                </a>
            </span>
            <br/>
            <span contenteditable="false" c2f="true" type="LINK"><a href="http://auctions.btmindustrial.com/auctionlist.aspx" style="color: #cccccc;" target="_blank">
                    Click Here for All Upcoming Auctions
                </a>
            </span>
    </div>
    <br/>
    <table width="600" border="0" cellspacing="0" cellpadding="0" style="border: 2px solid #dcdcdc; top: 86px; width: 615px; height: 564px; margin: 0px auto; background-color: #ffffff;">
        <thead>
            <tr>
                <td colspan="3" style="text-align: center; color: #494949; font-size: 40px;">
                    Machines
                </td>
            </tr>
        </thead>
        <tbody style="text-align: center;">

                <?php foreach ($info as $item) { ?>
                <?php if ($count == 0) { ?>
                <tr>
                    <?php }if($count % 3 == 0 && $count != 0) {?>
                        </tr>
                        <tr>
                    <?php } ?>
                    <!--lot <?php echo $count+1; ?>-->
                    <td>
                        <table border="0" cellpadding="5" cellspacing="0" width="100%" style="display: table;">
                            <tbody>
                            <tr>
                                <td align="center" styleclass="style_PromoTitle" style="font-size: 12pt; font-family: Arial, Helvetica, sans-serif; color: #000000;">
                                    <b><a style="cursor: pointer; color: #000000;" href="<?php echo $info[$count][0]; ?>" shape="rect"><?php echo $info[$count][2]; ?></a></b></td>
                            </tr>
                            <tr>
                                <td style="color: #000000;  text-align: center;" align="center"><a style="cursor: pointer;" href="<?php echo $info[$count][0]; ?>" shape="rect">
                                        <img height="90" vspace="0" border="0" name="ACCOUNT.IMAGE.239" hspace="0" width="123" src="<?php echo $info[$count][1]; ?>"></a><br><img height="2" width="185" name="ACCOUNT.IMAGE.255" alt="shiny-black-header.gif" vspace="5" hspace="5" border="0" src="https://origin.ih.constantcontact.com/fs197/1108582230802/img/255.gif?ver=1386953482000"><br></td>
                            </tr>
                            </tbody>
                        </table>
                    </td>

                <?php $count++; } ?>
            </tr>
                <tr>
                    <td colspan="4"><br>
                        <table width="600" border="0" cellspacing="0" cellpadding="0" style="width: 608px; height: 71px; top: 205px;">
                            <tbody>
                            <tr>
                                <td style="font-weight: bold; color: #000000; background-color: #ffffff;" align="center">
                                    <div>
                                        Any Questions Feel Free To Contact Us
                                    </div>
                                    <div>
                                        <table style="font-weight: bold; height: auto; width: 430px;" cellpadding="3" cellspacing="0" align="none">
                                            <tbody style="background-color: #cccccc;">
                                            <tr style="background-color: #cccccc;">
                                                <td style="text-align: center; height: 18px; width: 187px; color: #000000;">BTM Industrial<br>
                                                </td>
                                                <td style="text-align: center; height: 18px; width: 224px; color: #000000;">(616) 745-5953<br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center; height: 18px; width: 187px; color: #000000;">Info@btmindustrial.com<br>
                                                </td>
                                                <td style="text-align: center; height: 18px; width: 224px; color: #000000;"><span contenteditable="false" c2f="true" id="31" type="LINK" name="wwwbtmindustrialcom"><a name="wwwbtmindustrialcom" style="color: #000000; text-decoration: underline;" track="on" href="http://www.btmindustrial.com?utm_source=Campaigner&amp;utm_campaign=Friday_March_21_2014_-_3&amp;campaigner=1&amp;utm_medium=HTMLEmail" shape="rect" linktype="1" target="_blank">http://www.btmindustrial.com</a></span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
        </tbody>
    </table>
</div>










<!--other items-->
<!--
<div style="">
    <table style="background: #cccccc;">
        <tr style="background: #cccccc;">
            <td style="width:300px; padding:10px; background: #cccccc;">
                <div style="color: #990000;  border-bottom: solid #990000;"> CNC MILLS</div>
                <span style="color: #000000;  font-weight: bold;">2000 Toyoda FA550H HMC</span>
                        <span style="color: #666666;">Fanuc 16 CNC,21.6" x 21.6" Pallets, X: 29.5", Y: 29.5", Z: 23.6",
CAT50 Taper, Coolant Thru Spindle, 6000 RPM,
40 HP Spindle Motor, 40 Tool ATC</span><br>
                <span style="color: #000000;  font-weight: bold;">Cell Con</span>
                <span style="color: #666666;">H-15 Machining Center, Fanuc 21</span><br>
                <span style="color: #000000;  font-weight: bold;">1999 Mazak HTC 400</span>
                <span style="color: #666666;">HMC, Mazatrol Fusion</span><br>
                <span style="color: #000000;  font-weight: bold;">HURCO Hawk Model 5D/5M,</span>
                <span style="color: #666666;"> Ultimax 3</span><br>
                <div style="color: #990000;  border-bottom: solid #990000;">MANUAL MILLS:</div>
                <span style="color: #000000;  font-weight: bold;">DeVlieg 3B</span>
                <span style="color: #666666;"> Jigmill, DRO System</span><br>
                <span style="color: #000000;  font-weight: bold;">Kearney & Trecker</span>
                <span style="color: #666666;"> Vertical Mill</span><br>
                <span style="color: #000000;  font-weight: bold;">Cincinnati Toolmaster,</span>
                <span style="color: #666666;"> DRO</span><br>
                <div style="color: #990000;  border-bottom: solid #990000;">TURNING CENTERS:</div>
                <span style="color: #000000;  font-weight: bold;">Okuma Howa ACT2SP-2</span>
                <span style="color: #666666;"> CNC Lathe</span><br>
                <span style="color: #000000;  font-weight: bold;">1565 Clausing Metosa,</span>
                <span style="color: #666666;"> Fagor CNC</span><br>
                <span style="color: #000000;  font-weight: bold;">Mazak M-4</span>
                <span style="color: #666666;"> CNC Lathe, Mazatrol T-1, Parts Machine</span><br>
                <div style="color: #990000;  border-bottom: solid #990000;">FORKLIFTS:</div>
                <span style="color: #000000;  font-weight: bold;">10,000 Lb Clark</span>
                <span style="color: #666666;"> Forklift</span><br>
            </td>
            <td  style="width:300px; padding:10px; background: #cccccc;">
                <div style="color: #990000;  border-bottom: solid #990000;">PRESS BRAKES:</div>
                <span style="color: #000000;  font-weight: bold;">PACIFIC 18' x 200 Ton</span>
                <span style="color: #666666;">Downacting Hyd, DYNA BEND 3 CNC Back Gauge</span><br>
                <span style="color: #000000;  font-weight: bold;">DiAcro 8' x 35 Ton</span>
                <span style="color: #666666;">Hydra-Mechanical</span><br>
                <span style="color: #000000;  font-weight: bold;">VERSON 8' x 45 Ton</span>
                <span style="color: #666666;">Mechanical</span><br>
                <div style="color: #990000;  border-bottom: solid #990000;">IRONWORKERS:</div>
                <span style="color: #000000;  font-weight: bold;">90 Ton PIRANHA</span>
                <span style="color: #666666;"> P-90 Hydraulic</span><br>
                <span style="color: #000000;  font-weight: bold;">115 Ton EDWARDS</span>
                <span style="color: #666666;">Jaws IV Hydraulic</span><br>
                <div style="color: #990000;  border-bottom: solid #990000;">DRILLS:</div>
                <span style="color: #000000;  font-weight: bold;">28" YOSHIDA</span>
                <span style="color: #666666;">YUD-700 Single Spindle</span><br>
                <span style="color: #000000;  font-weight: bold;">FOSDICK 4' x 11"</span>
                <span style="color: #666666;"> Radial Arm Drill</span><br>
                <div style="color: #990000;  border-bottom: solid #990000;">GRINDERS:</div>
                <span style="color: #000000;  font-weight: bold;">12”x36” Gallmeyer & Livingston</span>
                <span style="color: #666666;">Grinder</span><br>
                <span style="color: #000000;  font-weight: bold;">24" BLANCHARD</span>
                <span style="color: #666666;"> Rotary Surface Grinder</span><br>
                <span style="color: #000000;  font-weight: bold;">Medina Model B</span>
                <span style="color: #666666;">End Grinder</span><br>
                <div style="color: #990000;  border-bottom: solid #990000;">SAWS:</div>
                <span style="color: #000000;  font-weight: bold;">Marvel Series 8 Mark II</span>
                <span style="color: #666666;"> Ver Band Saw</span><br>
                <span style="color: #000000;  font-weight: bold;">JET 9" x 16"</span>
                <span style="color: #666666;"> Wet Type Horizontal Band Saw</span><br>
                <span style="color: #000000;  font-weight: bold;">DELTA</span>
                <span style="color: #666666;"> 10" 3 HP Mitering Wheel Saw</span><br>
            </td>
        </tr>
    </table>
</div>
</div>-->