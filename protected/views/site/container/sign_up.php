
<style>
    .popupstyle{
        z-index: 100;
        padding:10px 20px 0px 20px;
        border-radius: 10px;
        width:500px;
        background: black;
        background-image:url('/images/footer_bg.jpeg');
        background-size: 100% 100%;
    }
    .newssignup_close{
        background: none;
        border: none;
        cursor: pointer;
    }
    .popupstyle_hardcopy{
        z-index: 100;
        padding:10px 20px 0px 20px;
        border-radius: 10px;
        width:500px;
        background: black;
        background-image:url('/images/footer_bg.jpeg');
        background-size: 100% 100%;
    }
    .newssignup_hardcopy_close{
        background: none;
        border: none;
        cursor: pointer;
    }
</style>
<!-- Add content to the popup -->
<div id="newssignup">
    <div class="shadow popupstyle" >
        <div style="width:100%; border-bottom: solid #FFA500; height:28px;">
            <a style="margin-left: 4px; color: #FFA500; font-size: 24px;">Sign-up Form</a>
            <div style="float: right; margin-right: -5px;">
                <button class="newssignup_close"><img src="/images/icons/orange_x.gif" style="height: 19px; width: 19px; " /></button>
            </div>
        </div>
        <div style="color: white; padding:5px;" >
            <span >This is the Sign up for a FREE monthly </span><br/>
            <span >Email, copy publication.  No Credit Card Needed!</span><br/>
        </div>
        <form action=".\form_handlers\customers.php" method="post">
            <div style="background: white; padding:5px;">
                <table>
                    <tr>
                        <td style="width:80px;">
                            First Name:
                        </td>
                        <td>
                            <input class="" name="name" required>
                        </td>
                        <td style="padding-left: 5px;">
                            Last Name
                        </td>
                        <td>
                            <input class="" name="l_name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Company:
                        </td>
                        <td>
                            <input class="" name="company"  >
                        </td>
                        <td style="padding-left: 20px;">
                            Email:
                        </td>
                        <td>
                            <input class="" name="email" type="email" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phone:
                        </td>
                        <td>
                            <input class="" name="phone" type="" required>
                        </td>
                        <td style="padding-left: 20px;">
                            State:
                        </td>
                        <td>
                            <select name="state" name="state" required>
                                <option value="AL">AL</option>
                                <option value="AK">AK</option>
                                <option value="AZ">AZ</option>
                                <option value="AR">AR</option>
                                <option value="CA">CA</option>
                                <option value="CO">CO</option>
                                <option value="CT">CT</option>
                                <option value="DE">DE</option>
                                <option value="DC">DC</option>
                                <option value="FL">FL</option>
                                <option value="GA">GA</option>
                                <option value="HI">HI</option>
                                <option value="ID">ID</option>
                                <option value="IL">IL</option>
                                <option value="IN">IN</option>
                                <option value="IA">IA</option>
                                <option value="KS">KS</option>
                                <option value="KY">KY</option>
                                <option value="LA">LA</option>
                                <option value="ME">ME</option>
                                <option value="MD">MD</option>
                                <option value="MA">MA</option>
                                <option value="MI">MI</option>
                                <option value="MN">MN</option>
                                <option value="MS">MS</option>
                                <option value="MO">MO</option>
                                <option value="MT">MT</option>
                                <option value="NE">NE</option>
                                <option value="NV">NV</option>
                                <option value="NH">NH</option>
                                <option value="NJ">NJ</option>
                                <option value="NM">NM</option>
                                <option value="NY">NY</option>
                                <option value="NC">NC</option>
                                <option value="ND">ND</option>
                                <option value="OH">OH</option>
                                <option value="OK">OK</option>
                                <option value="OR">OR</option>
                                <option value="PA">PA</option>
                                <option value="RI">RI</option>
                                <option value="SC">SC</option>
                                <option value="SD">SD</option>
                                <option value="TN">TN</option>
                                <option value="TX">TX</option>
                                <option value="UT">UT</option>
                                <option value="VT">VT</option>
                                <option value="VA">VA</option>
                                <option value="WA">WA</option>
                                <option value="WV">WV</option>
                                <option value="WI">WI</option>
                                <option value="WY">WY</option>
                            </select>
                        </td>
                    </tr>

                </table>
                <div style="position: absolute;">
                    <table style="margin-left: 388px; margin-top: -32px;">
                        <td style="padding-left: 7px;">
                            Zip:
                        </td>
                        <td >
                            <input style="max-width:54px;" name="zip" required>
                        </td>
                    </table>
                </div>
                <input type="checkbox" checked name="subscribed"> I would like to receive a Free email copy of Industrial Times each month

                <div class="clearboth"></div>
            </div>
            <br/>
            <input class="button" type="submit" value="Sign-up" style="border: none; margin-bottom: 10px;" />
        </form>
    </div>

</div>




<div id="newssignup_hardcopy">
    <div class=" popupstyle_hardcopy" >
        <div style="width:100%; border-bottom: solid #519bc5; height:28px;">
            <a style="margin-left: 4px; color: #519bc5; font-size: 24px;">Sign-up Form For Mail Subscription</a>
            <div style="float: right; margin-right: -5px;">
                <button class="newssignup_hardcopy_close"><img src="/images/icons/orange_x.gif" style="height: 19px; width: 19px; " /></button>
            </div>
        </div>
        <div style="color: white; padding:5px;" >
            <span >This is the Sign up for a mailed copy of Industrial Times</span><br/>
            <span >The issue is shipped out in the middle of each month and will arrive at the convenience of your location for $1.67/month ($20/year).</span><br/>
            <span>We do offer first class shipping for $5/month ($60/year)</span>
        </div>
        <form action=".\form_handlers\customers_hardcopy.php" method="post">
            <div style="background: white; padding:5px;">
                <table style="text-align: left;">
                    <tr>
                        <td style="width:80px;">
                            First Name:
                        </td>
                        <td>
                            <input class="" name="name" required>
                        </td>
                        <td style="padding-left: 5px;">
                            Last Name
                        </td>
                        <td>
                            <input class="" name="l_name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input class="" name="email" type="email" required>
                        </td>
                        <td>
                            Company:
                        </td>
                        <td>
                            <input class="" name="company"  >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phone:
                        </td>
                        <td>
                            <input class="" name="phone" type="" required>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            Address
                        </td>
                        <td>
                            <input class="" name="address" type="" required>
                        </td>
                        <td style="padding-left: 20px;">
                            State:
                        </td>
                        <td>
                            <select name="state" name="state" required>
                                <option value="AL">AL</option>
                                <option value="AK">AK</option>
                                <option value="AZ">AZ</option>
                                <option value="AR">AR</option>
                                <option value="CA">CA</option>
                                <option value="CO">CO</option>
                                <option value="CT">CT</option>
                                <option value="DE">DE</option>
                                <option value="DC">DC</option>
                                <option value="FL">FL</option>
                                <option value="GA">GA</option>
                                <option value="HI">HI</option>
                                <option value="ID">ID</option>
                                <option value="IL">IL</option>
                                <option value="IN">IN</option>
                                <option value="IA">IA</option>
                                <option value="KS">KS</option>
                                <option value="KY">KY</option>
                                <option value="LA">LA</option>
                                <option value="ME">ME</option>
                                <option value="MD">MD</option>
                                <option value="MA">MA</option>
                                <option value="MI">MI</option>
                                <option value="MN">MN</option>
                                <option value="MS">MS</option>
                                <option value="MO">MO</option>
                                <option value="MT">MT</option>
                                <option value="NE">NE</option>
                                <option value="NV">NV</option>
                                <option value="NH">NH</option>
                                <option value="NJ">NJ</option>
                                <option value="NM">NM</option>
                                <option value="NY">NY</option>
                                <option value="NC">NC</option>
                                <option value="ND">ND</option>
                                <option value="OH">OH</option>
                                <option value="OK">OK</option>
                                <option value="OR">OR</option>
                                <option value="PA">PA</option>
                                <option value="RI">RI</option>
                                <option value="SC">SC</option>
                                <option value="SD">SD</option>
                                <option value="TN">TN</option>
                                <option value="TX">TX</option>
                                <option value="UT">UT</option>
                                <option value="VT">VT</option>
                                <option value="VA">VA</option>
                                <option value="WA">WA</option>
                                <option value="WV">WV</option>
                                <option value="WI">WI</option>
                                <option value="WY">WY</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            City
                        </td>
                        <td>
                            <input class="" name="city" type="" required>
                        </td>
                        <td style="padding-left: 25px;">
                            Zip:
                        </td>
                        <td >
                            <input style="max-width:54px;" name="zip" required>
                        </td>
                    </tr>

                </table>

                <div >
                    <span>Terms & Conditions</span><br>
                    <div style="margin-left: 10px;">
                        <span style="font-size: 12px; color: #494949;">
                            Industrial Times will bill each month for a total of $2.98 unless asked otherwise.<br>
                            Industrial Times is not responsible for the issue being late duo to 3rd party issues.
                        </span>

                    </div>
                </div>
                <input type="checkbox" checked name="terms"> I have read and agreed to the terms and conditions of Industrial Times.

                <div class="clearboth"></div>
            </div>
            <br/>
            <input class="button" type="submit" value="Sign-up" style="border: none; margin-bottom: 10px;" />
        </form>
    </div>

</div>

<!-- Include jQuery -->
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>

<!-- Include jQuery Popup Overlay -->
<script src="http://vast-engineering.github.io/jquery-popup-overlay/jquery.popupoverlay.js"></script>

<script>
    $(document).ready(function() {

        // Initialize the plugin
        $('#newssignup').popup({
            transition: 'all 0.5s',
            horizontal: 'center',
            vertical: 'center'
        });

    });

    $(document).ready(function() {

        // Initialize the plugin
        $('#newssignup_hardcopy').popup({
            transition: 'all 0.5s',
            horizontal: 'center',
            vertical: 'center'
        });

    });

</script>
