<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 8/25/14
 * Time: 12:12 PM
 */

$second_date = strtotime("+7 day");
$second_date =  date('Y-m-d',$second_date);
$auctions = Auctions::model()->get_this_weeks_auctions();
$lastdate = 0000-00-00;

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
                    Auctions
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
            <td style="color: #ffffff; font-size: 16pt; text-align: center; padding: 0px 0px 0px;" valign="top" align="center">
                <div style="text-align: center;" align="center"><br></div>
            </td>
            <td style="color: #ffffff; font-size: 16pt; text-align: center; font-family: Georgia, 'Times New Roman', Times, serif;" valign="bottom" width="100%" align="center">
                <div style="line-height: 1.1;">
                    <div>Following is a list of THIS WEEKS Auctions, visit our website for the most complete listing of upcoming</div>
                    <div><strong>Metalworking Machinery Auctions</strong> on the web!</div>
                    <div>
                        <p style="text-align: center; margin-top: 0px; margin-bottom: 0px;" align="center"><span style="font-size: 16pt; font-family: Georgia, serif;">&nbsp;</span></p>
                        <a style="color: blue; text-decoration: underline;"     href="http://www.industrialtimesinc.com"   target="_blank">www.IndustrialTimesInc.com</a>
                        <p style="text-align: center; margin-top: 0px; margin-bottom: 0px;" align="center"><span style="font-size: 16pt; font-family: Georgia, serif;">&nbsp;</span><span style="line-height: 1.1; font-size: 16pt;">&nbsp;</span><span style="line-height: 1.1; font-size: 16pt; font-family: Georgia, serif;">&nbsp;</span></p>
                        UPCOMING AUCTIONS for the week of February 2nd, 2015</div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <!--auction Title-->
    <table style="width:100%; height: auto;" border="0" cellpadding="0" align="center">
        <tbody>
        <tr style="background: #333333; color: #ffffff; ">
            <td style="width: 20%;text-align: center; ">
                <span style="padding:5px;">Auctioneer</span>
            </td>
            <td style="width: 60%;text-align: center;">
                <span style="padding:5px;">Info</span>
            </td>
            <td style="width: 20%;text-align: center; ">
                <span style="padding:5px;">Location</span>
            </td>
        </tr>
        </tbody>
    </table>
    <!--auctions-->
    <table style="width:100%;">
        <tbody>
        <?php
        $i = 0;
        foreach ($auctions as $auction){
            if($auction->date < $second_date){
                $i++;
                if($auction->date != $lastdate){ $lastdate = $auction->date; ?>
                    <tr>
                        <td colspan="3" style="background: #7f7f7f; color: #ffffff; text-align: center; font-size: 20px;"><?php echo date("l, m/d", strtotime($auction->date)); ?></td>
                    </tr>
                <?php }
                ?>
                <tr <?php if ($i%2 == 1){echo "style='background: #e3edf0;'";} ?>>
                    <td style="width:20%;"><?php echo $auction->company; ?></td>
                    <td style="width:60%;"><a href="<?php echo $auction->url;?>"><?php echo $auction->title; ?></a><br/><?php echo $auction->info;?></td>
                    <td style="width:20%;"><?php echo $auction->location;?></td>
                </tr>
            <?php } }?>
        </tbody>
    </table>
    <!--Description-->
    <table style="background-color: #efefef; display: table;" bgcolor="#EFEFEF" border="0" cellpadding="0" cellspacing="0" width="100%" >
        <tbody>
        <tr>
            <td style="font-size: 18pt; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; padding: 10px 22px 7px 27px;" valign="top" align="left" >
                <div style="text-align: center;" align="center"><strong>
                        <div ><span>Need to reach the Metalworking Community with your product or service? &nbsp;</span></div>
                        <div ><span>&nbsp;</span></div>
                        <div ><span>Advertise with us today!</span></div>
                        <div ><span>&nbsp;</span></div>
                        <div ><span>Visit our website at</span></div>
                        <div><a style="color: blue; text-decoration: underline;" href="http://www.industrialtimesinc.com"  >www.industrialtimesinc.com</a></div>
                    </strong></div>
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