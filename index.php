<?php
/* --------------------  This is where you put the auction info --------------------------*/
$auction_url = 'http://auctions.btmindustrial.com/Monthly-Machinery-Auction_as35195';
$date = 'January 21st';
$auction_title = 'Monthly Machinery Auction';

$info = array();

/* ------------------------------      Past the code from excel in here   ----------------------------------- */
$info[0][0]="http://auctions.btmindustrial.com/auction.aspx?a=23125&as=35195&p=1&ps=50#i21323525";$info[0][1]="http://media.liveauctiongroup.net/i/23125/21323525_1s.jpg?v=8D1F2F0647347A0";$info[0][2]="1986 Mazak Model ST30 - ATCMC CNC Lathe";
$info[1][0]="http://auctions.btmindustrial.com/auction.aspx?a=23125&as=35195&p=1&ps=50#i21323526";$info[1][1]="http://media.liveauctiongroup.net/i/23125/21323526_1s.jpg?v=8D1FC76FCDE7B10";$info[1][2]="5000 Lb Hyster Electric Lift Truck";
$info[2][0]="http://auctions.btmindustrial.com/auction.aspx?a=23125&as=35195&p=1&ps=50#i21359258";$info[2][1]="http://media.liveauctiongroup.net/i/23125/21359258_1s.jpg?v=8D1FC7718C8C830";$info[2][2]="3000 Lb Raymond Electric Stand Up Lift Truck";
$info[3][0]="http://auctions.btmindustrial.com/auction.aspx?a=23125&as=35195&p=1&ps=50#i21336952";$info[3][1]="http://media.liveauctiongroup.net/i/23125/21336952_1s.jpg?v=8D201DB0C806D30";$info[3][2]="Cincinnati Bickford Radial Drill";
$info[4][0]="http://auctions.btmindustrial.com/auction.aspx?a=23125&as=35195&p=1&ps=50#i21338353";$info[4][1]="http://media.liveauctiongroup.net/i/23125/21338353_1s.jpg?v=8D201DB3F0132D0";$info[4][2]="Roto-Finish Vibratory Finisher";
$info[5][0]="http://auctions.btmindustrial.com/auction.aspx?a=23125&as=35195&p=1&ps=50#i21338363";$info[5][1]="http://media.liveauctiongroup.net/i/23125/21338363_1s.jpg?v=8D2011132D84F90";$info[5][2]="Charmilles FORM 20 EDM";
$info[6][0]="http://auctions.btmindustrial.com/auction.aspx?a=23125&as=35195&p=1&ps=50#i21336235";$info[6][1]="http://media.liveauctiongroup.net/i/23125/21336235_1s.jpg?v=8D201EFBE32C0F0";$info[6][2]="Studer S20 OD Grinder";
$info[7][0]="http://auctions.btmindustrial.com/auction.aspx?a=23125&as=35195&p=1&ps=50#i21336234";$info[7][1]="http://media.liveauctiongroup.net/i/23125/21336234_1s.jpg?v=8D1FE95E98E9B50";$info[7][2]="Mazak VQC-20/40 B";
$info[8][0]="http://auctions.btmindustrial.com/auction.aspx?a=23125&as=35195&p=1&ps=50#i21430362";$info[8][1]="http://media.liveauctiongroup.net/i/23125/21430362_1s.jpg?v=8D1FE9EA476FD60";$info[8][2]="Cincinnati Milacron 220-8 Centerless Grinder";
/* ------------------------------      This is the end of the excel code   ----------------------------------- */
$count=0;
?>

<!-- This is the code that generated the site -->
<div id="Copy_ME" style="background-color: #333333; text-align: center; margin: 0px auto;">
    <!--banner part-->
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
                    <td colspan="3" style="background: #333333; color: #ffffff;">
                        <div >
                            <h2>Have a machine up for sale?<br/>
                                Call us and see how we can help.<br/>
                                (616) 745-5953</h2>
                        </div>
                    </td>
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