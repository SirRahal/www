<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 8/25/14
 * Time: 12:12 PM
 */

$second_date = strtotime("+31 day");
$second_date =  date('Y-m-d',$second_date);
$auctions = Auctions::model()->get_this_weeks_auctions();
$lastdate = 0000-00-00;




$latest_issue = Issues::model()->latest_issue();
$temp = strlen($latest_issue['img']);
$back_img = substr($latest_issue['img'],0,$temp-4);
$issue_back_img = 'http://www.industrialtimesinc.com/images/covers/'.$back_img . '_back'.substr($latest_issue['img'],$temp-4);
$issue_img = 'http://www.industrialtimesinc.com/images/covers/'.$latest_issue['img'];

$issue_date = $latest_issue['date'];
$issue_url = $latest_issue['url'];
$issue_url = 'http://www.industrialtimesinc.com/issues/'.$issue_url;






?>
<div id="Copy_this_div">
    <!--Banner-->
    <table style="width: 100%; text-align: center">
        <tr style="width: 100%; text-align: center">
            <td style="width: 100%; text-align: center">
                <a href="http://www.industrialtimesinc.com" target="_blank">
                    <img src="http://www.industrialtimesinc.com/images/banner/website_banner.jpg" width="100%;">
                </a>
            </td>
        </tr>
    </table>
    <!--menu-->
    <table border="0" cellpadding="0" cellspacing="0" width="100%;" style="background-color: #303030; width: 100%; text-align: center;">
        <tbody style="width:100%; text-align: center;">
        <tr>
            <td style="width: 20%; text-align: center; padding:7px;">
                <a style="color: #ffffff; text-decoration: none;" href="http://www.industrialtimesinc.com/" target="_blank">
                    Website
                </a>
            </td>
            <td style=" width: 20%;text-align: center; padding:7px;">
                <a style="color: #ffffff; text-decoration: none;" href="http://industrialtimesinc.com/index.php/site/media_guide" target="_blank">
                    Media Guide
                </a>
            </td>
            <td style=" width: 20%;text-align: center; padding:7px;">
                <a style="color: #ffffff; text-decoration: none;" href="http://industrialtimesinc.com/index.php/site/page?view=about" target="_blank">
                    About Us
                </a>
            </td>
            <td style=" width: 20%;text-align: center; padding:7px;">
                <a style="color: #ffffff; text-decoration: none;" href="http://industrialtimesinc.com/index.php/auctions"  target="_blank">
                    Upcoming Auctions
                </a>
            </td>
            <td style=" width: 20%;text-align: center; padding:7px;">
                <a style="color: #ffffff; text-decoration: none;" href="http://industrialtimesinc.com/index.php/site/contact" target="_blank">
                    Contact Us
                </a>
            </td>
        </tr>
        </tbody>
    </table>
    <!--info-->
    <table width="100%" cellspacing="0" cellpadding="0" border="0" style="display: table; background-color: #519bc5; font-size: 12pt; font-family: 'Century Gothic', Calibri, Helvetica, Arial, sans-serif; color: #000000;" bgcolor="#519BC5" >
        <tbody>
        <tr>
            <td valign="bottom" width="71%" align="center">
                <div>
                    <div>
                        <a href="<?php echo $issue_url;?>" target="_blank">
                            <img src="<?php echo $issue_img;?>"/>
                            <img src="<?php echo $issue_back_img;?>"/>
                        </a>
                    </div>
                </div>
            </td>
            <td>
                <div style="padding:10px; color: #ffffff; font-size: 20pt; text-align: center;"><b>Click to open our <?php echo date("M Y", strtotime($issue_date));?> Issue</b></div>
            </td>
        </tr>
        </tbody>
    </table>
    <table style="width:100%; height: auto;" border="0" cellpadding="0" align="center">
        <tbody>
            <tr>
                <!--left col-->
                <td style="width: 30%;">
                    <table style="border: solid 3px #519bc5;">
                        <tr>
                            <td>
                                <div style="padding:5px; text-align: center;">
                                    <div style="font-size: 18px; font-weight: bold; border-bottom: solid 1px #519bc5">To Unsubscribe</div>
                                    <div>If you wish to no longer receive this email, please push the unsubscribe button at the bottom of the page.</div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table style="border: solid 3px #519bc5;">
                        <tr>
                            <td>
                                <div style="padding:5px; text-align: center;">
                                    <div style="font-size: 18px; font-weight: bold; border-bottom: solid 1px #519bc5">Want to Reach Out To Our Audience?</div>
                                    <div>Industrial Times is a monthly publication serving the Midwest's Metalworking Community.
                                        The Midwest Region has long been the cornerstone of the United States manufacturing industry. Our publication
                                        is distributed to over 15,000 qualified decision makers in Michigan, Illinois, Indiana, Ohio, Wisconsin,
                                        and parts of Missouri, Minnesota, Pennsylvania, Kentucky and Iowa. We have developed our direct mailing
                                        list to include the decision makers in companies primarily engaged in either metal cutting or the metal
                                        forming segments.
                                    </div>
                                    <img src="http://www.industrialtimesinc.com/images/media_kit/mags.png" width="200"/>
                                </div>
                            </td>
                        </tr>
                    </table>


                    <table style="border: solid 3px #519bc5;">
                        <tr>
                            <td>
                                <div style=" padding:5px; text-align: center;">
                                    <div style="font-size: 18px; font-weight: bold; border-bottom: solid 1px #519bc5">Contact Us</div>
                                    <table>
                                        <tr>
                                            <td><b>Phone</b></td>
                                            <td>(616) 259-9110</td>
                                        </tr>
                                        <tr>
                                            <td><b>Fax</b></td>
                                            <td>(616) 570-0661</td>
                                        </tr>
                                        <tr>
                                            <td><b>Address</b></td>
                                            <td>
                                                1930 Fuller Avenue Suite B
                                                Grand Rapids, MI 49505
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Email</b></td>
                                            <td>admin@industrialtimesinc.com</td>
                                        </tr>
                                    </table>

                                </div>
                            </td>

                        </tr>
                    </table>


                    <table style="border: solid 3px #519bc5;">
                        <tr>
                            <td>
                                <div style="padding:5px; text-align: center;">
                                    <div style="font-size: 18px; font-weight: bold; border-bottom: solid 1px #519bc5">Upcoming Event?</div>
                                    <div style="text-align: left;">
                                        It's not too late to get into our February Issue.  Please contact us or take a look at our website for more details.
                                        <br/><br/>
                                        Sincerely,
                                        <br/>
                                        <img src="http://www.industrialtimesinc.com/images/media_kit/signiture.jpg" width="100px" />
                                    </div>

                                </div>
                            </td>

                        </tr>
                    </table>

                </td>
                <!--right col-->
                <td style="width: 70%;">
                    <!--auction Title-->
                    <table style="width:100%; height: auto;" border="0" cellpadding="0" align="center">
                        <tbody>
                        <tr style="background: #333333; color: #ffffff; ">
                            <td style="width: 20%;text-align: center; ">
                                <span style="padding:5px;">Auctioneer</span>
                            </td>
                            <td style="width: 20%;text-align: center; ">
                                <span style="padding:5px;">Location</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!--auctions-->
                    <table style="width:100%;border: solid 3px #519bc5;">
                        <tbody>
                        <?php
                        $i = 0;
                        foreach ($auctions as $auction){
                            if($auction->date < $second_date){
                                $i++;
                                if($auction->date != $lastdate){ $lastdate = $auction->date; ?>
                                    <tr>
                                        <td colspan="2" style="background: #7f7f7f; color: #ffffff; text-align: center; font-size: 20px;"><?php echo date("l, m/d", strtotime($auction->date)); ?></td>
                                    </tr>
                                <?php }
                                ?>
                                <tr <?php if ($i%2 == 1){echo "style='background: #e3edf0;'";} ?>>
                                    <td style="width:20%;"><a href="<?php echo $auction->url;?>"><?php echo $auction->company; ?></a></td>
                                    <td style="width:20%;"><?php echo $auction->location;?></td>
                                </tr>
                            <?php } }?>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>



    <!--Contact info-->
    <table style="background-color: #ffffff;" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
        <tr>
            <td style="padding: 7px 8px; font-size: 9pt; font-family: Arial, Helvetica, sans-serif; color: #303030;" valign="top" align="center">
                <div style="text-align: center;"><span style="font-size: 14pt;">Industrial Times | 616-259-9110 | </span><a style="font-size: 14pt; font-family: Arial, Helvetica, sans-serif; color: #2f4879;" href="mailto:joann@industrialtimesinc.com"  >joann@industrialtimesinc.com</a> <br></div>
            </td>
        </tr>
        </tbody>
    </table>
</div>