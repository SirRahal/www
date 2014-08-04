<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="/css/jquery-ui-custom/jquery-ui.css" />


<style>
    .no-close .ui-dialog-titlebar-close {
        display: none;
    }

</style>
<script>
    $(function() {
        var dialog, form,

        //put vaariable here
            emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
            name = $( "#name" ),
            email = $( "#email" ),
            phone = $( "#phone"),
            auctioneer = $( "#auctioneer" ),
            title = $( "#title"),
            location = $( "#location"),
            date = $( "#date"),
            url = $( "#url"),
            info = $( "#info"),
            allFields = $( [] ).add( name ).add( email ).add( phone ).add( auctioneer).add( title).add( location).add( date).add( url).add( info),
            tips = $( ".validateTips" );

        function addUser() {
            if(checkValid())
            {
                var valid = true;
                allFields.removeClass( "ui-state-error" );
                $.ajax({
                        type: "POST",
                        url: '<?php echo Yii::app()->createUrl('auctions/post_auction'); ?>',
                        data: {
                            name : name.val(),
                            email: email.val(),
                            phone : phone.val(),
                            auctioneer : auctioneer.val(),
                            title : title.val(),
                            location : location.val(),
                            date : date.val(),
                            url : url.val(),
                            info : info.val()
                        },
                        success: function(){
                            alert('Thank you for posting your auction.  Someone will be contacting you soon!');
                            dialog.dialog( "close" );
                        }, error : function(){
                            alert('Sorry there is an error with your form, please try again.  If the issue happens again, please contact us to assist you')
                        }
                    }
                );
            }else{
                alert('Please fill out the whole form before submitting.');
            }
            return valid;
        }

        function checkValid(){
            if( name.val() < 1 ||
                email.val() < 1 ||
                phone.val() < 1 ||
                auctioneer.val() < 1 ||
                title.val() < 1 ||
                location.val() < 1 ||
                date.val() < 1 ||
                url.val() < 1 ||
                info.val() < 1 ){
                return false;
            }else{
                return true;
            }

        }

        dialog = $( "#dialog-form" ).dialog({
            autoOpen: false,
            width: 700,
            modal: true,
            buttons: {
                "submit Auction": addUser,
                Cancel: function() {
                    dialog.dialog( "close" );
                }
            },
            close: function() {
                form[ 0 ].reset();
                allFields.removeClass( "ui-state-error" );
            }
        });

        form = dialog.find( "form" ).on( "submit", function( event ) {
            event.preventDefault();
            addUser();
        });

        $( "#post_auction" ).button().on( "click", function() {
            dialog.dialog( "open" );
        });
    });
</script>
<style>
    .note-box{
        border: solid #5c9bcb 1px;
        padding: 5px;
        margin-top: 40px;
        margin-bottom: 40px;
    }
</style>
<div id="dialog-form" title="Post Your Auction">
    <p class="validateTips">All form fields are required.</p>
    <div style="position: absolute; right:10px; width:300px;">
        <div class="note-box">
            Please note that the information to the left will not be shared to the public.  This is for Industrial Times to contact you about your auction.
        </div>
        <div class="note-box">
            The Auction information will be posting on our home page, auction page, as well as sent out in 2 email blasts.  The auctioneer will also receive his own page with listing off all upcoming auctions.
        </div>
    </div>

    <form>
        <fieldset>
            <table>
                <tbody>
                <tr>
                    <td style="width:165px;">
                        <b>Contact Information</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="name" >Name</label>
                    </td>
                    <td>
                        <input autofocus type="text" name="name" id="name" class="text ui-widget-content ui-corner-all">
                    </td>
                </tr>
                <tr>
                    <td>
                        <!--Email-->
                        <label for="email">Email</label>
                    </td>
                    <td>
                        <input type="text" name="email" id="email"  class="text ui-widget-content ui-corner-all">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phone">Phone</label>
                    </td>
                    <td>
                        <input type="text" name="phone" id="phone" class="text ui-widget-content ui-corner-all">
                    </td>
                </tr>
                <tr>
                    <td><b>Auction Details</b></td>
                </tr>
                <tr>
                    <td>
                        <label for="auctioneer">Auctioneer</label>
                    </td>
                    <td>
                        <input type="text" name="title" id="auctioneer" class="text ui-widget-content ui-corner-all">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="title">Auction Title</label>
                    </td>
                    <td>
                        <input type="text" name="title" id="title" class="text ui-widget-content ui-corner-all">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="location">Location</label>
                    </td>
                    <td>
                        <input type="text" name="laction" id="location" class="text ui-widget-content ui-corner-all">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date">Date</label>
                    </td>
                    <td>
                        <input type="date" name="date" id="date" class="text ui-widget-content ui-corner-all">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="url">URL</label>
                    </td>
                    <td>
                        <input type="text" name="url" id="url" class="text ui-widget-content ui-corner-all">
                    </td>
                </tr>
                <tr>
                    <td>
                        Auction Info
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea rows="3" cols="63" name="info" id="info" class="text ui-widget-content ui-corner-all"></textarea>
                    </td>
                </tr>
                </tbody>
            </table>

            <!-- Allow form submission with keyboard without duplicating the dialog button -->
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px" name="info" id="info" class="text ui-widget-content ui-corner-all">
        </fieldset>
    </form>
    <div class="clear"></div>
    <div style="width:100%; text-align: center"><b>Example</b></div>
    <div class="view" style="border: dashed #519bc5; color: #494949;">
        <div style="position: absolute;float: left; margin-left: 509px;">

            <br>
        </div>

        <a href="/index.php/auctioneer/0">Industrial Times Inc</a>
        <br>
        <div style="float: left; width: 60%;">
            <b>Title:</b>FREE Indutrial Auction
            <br>
            <b>Url:</b><a href="http://www.indutrialtimesinc.com">http://www.indutrialtimesinc.com</a>
            <br>
        </div>
        <div>
            <b>Date:</b>11/17/2014
            <br>
            <b>Location:</b>Grand Rapids MI
            <br>
        </div>
        <br>
        <b>Info:</b>
        This is an example of an upcoming auction.  This will show up on the site as well as emailed 2 times: the month of, and beginning of the week.    <br>
    </div>
</div>