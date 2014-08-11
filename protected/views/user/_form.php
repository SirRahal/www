<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<head>
    <script type="text/javascript" src="/js/verifynotify.js"></script>
</head>
<script>
    function inputFocus(i){
        if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
    }
    function inputBlur(i){
        if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
    }
    function create(){
        var valid = false;
        var errorNote = '';
        var ticket = $( "#ticket");
        var first_name = $( "#first_name");
        var last_name = $( "#last_name");
        var email = $( "#email");
        var city = $( "#city");
        var state = $( "#state");
        var zip = $( "#zip");
        var phone = $( "#phone");
        var user_name = $( "#user_name");
        var password1 = $( "#password1");
        var password2 = $( "#password2");
        valid = validate();

        if(valid){
            $("#freeow").freeow("Error!", errorNote);
        }
        function validate(){
            /*validate ticket number*/
            if(ticket.val()<1){
                errorNote = errorNote+"Ticket code is mandatory \n\n";
            }
            /*validate first name*/
            if(first_name.val()<1){
                errorNote = errorNote+"First name is required";
            }
            /*validate last name*/
            /*validate email*/
            /*validate city*/
            /*validate state*/
            /*validate zip*/
            /*validate phone*/
            /*validate user name*/
            /*validate password*/
            return true;
        }
    }

</script>
<div class="form">
	<p class="note">All fields are required.</p>
</div><!-- form -->
<form name="user_form">
<div>
    <div class="row">
        <inputlable><b>Ticket</b></inputlable><br/>
        <input type="text" id="ticket" name="ticket" title="This can be found in the bottom right of your ticket" placeholder="000-0000" size="9"/>
    </div>


    <div class="row">
        <inputlable><b>First Name</b></inputlable><br/>
        <input type="text" id="first_name" name="first_name" title="" placeholder="" size="60">
    </div>

    <div class="row">
        <inputlable><b>Last Name</b></inputlable><br/>
        <input type="text" id="last_name" name="last_name" title="" placeholder="" size="60">
    </div>

    <div class="row">
        <inputlable><b>Email</b></inputlable><br/>
        <input type="text" id="email" name="email" title="" placeholder="Someone@BracketFanatic.com" type="email" size="60">
    </div>
    <div class="row">
        <inputlable><b>City</b></inputlable><br/>
        <input type="text" id="city" name="city" title="" placeholder="" size="60">
    </div>
    <div class="row">
        <inputlable><b>State</b></inputlable><br/>
        <select id="state" name="state">
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
    </div>
    <div class="row">
        <inputlable><b>Zip code</b></inputlable><br/>
        <input type="text" id="zip" name="zip" title="" placeholder="" size="8">
    </div>
    <div class="row">
        <inputlable><b>Phone #</b></inputlable><br/>
        <input type="text" id="phone" name="phone" title="" placeholder="1(555)-555-5555" size="13">
    </div>
    <div class="row">
        <inputlable><b>User Name</b></inputlable><br/>
        <input type="text" id="user_name" name="user_name" title="" placeholder="" size="30">
    </div
    <div class="row">
        <inputlable><b>Password</b></inputlable><br/>
        <input type="password" name="password1" onkeyup="verify.check()">
    </div>
    <div class="row">
        <inputlable><b>Re-enter Password</b></inputlable><br/>
        <input type="password" name="password2" onkeyup="verify.check()">
    </div>
    <div id="password_result"><span style="color:red">Please make sure your passwords match.</span></div>
    <DIV ID="password_result">&nbsp;</DIV>
</div>
</form>

<script type="text/javascript">
    <!--

    verify = new verifynotify();
    verify.field1 = document.user_form.password1;
    verify.field2 = document.user_form.password2;
    verify.result_id = "password_result";
    verify.match_html = "<SPAN STYLE=\"color:blue\">Thank you, your passwords match!<\/SPAN>";
    verify.nomatch_html = "<SPAN STYLE=\"color:red\">Please make sure your passwords match.<\/SPAN>";

    // Update the result message
    verify.check();

    // -->
</script>

<button onclick="create()">Add Ticket</button>