<!DOCTYPE html>
<html>
<head>
    <title>jQuery countdown plugin - devingredients.com</title>
    <link rel="stylesheet" type="text/css" href="/css/countdown.css">
    <script type="text/javascript" src="/js/countdown.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#countdown").countdown({
                date: "15 march 2015 11:00:00" // add the countdown's end date (i.e. 3 november 2012 12:00:00)
            }, function() {
                alert("Tournament Has Begun!");
            });

        });
    </script>

</head>
<body class="countdown_div">
<ul id="countdown">
    <li style="width: 500px; font-size: 15px; padding:10px; background: none; color:#333333; border: none; box-shadow: none;" class="countdown_text">
        All tickets are editable before noon of the first game.  Please make sure you have all of your tickets.  If a ticket is registered to you, and is not set up, it will get auto easy picked.
    </li>
    <li>
        <span class="days">00</span><br/>
        <span class="timeRef">Days</span>
    </li>
    <li>
        <span class="hours">00</span><br/>
        <span class="timeRef">Hours</span>
    </li>
    <li>
        <span class="minutes">00</span><br/>
        <span class="timeRef">Minutes</span>
    </li>
    <li>
        <span class="seconds">00</span><br/>
        <span class="timeRef">Seconds</span>
    </li>
</ul>
</body>
</html>