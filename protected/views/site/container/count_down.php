<!DOCTYPE html>
<html>
<head>
    <title>jQuery countdown plugin - devingredients.com</title>
    <link rel="stylesheet" type="text/css" href="/css/countdown.css">
    <script type="text/javascript" src="/js/countdown.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#countdown").countdown({
                date: "1 march 2015 17:07:00", // add the countdown's end date (i.e. 3 november 2012 12:00:00)
            }, function() {
                alert("Tournament Has Begun!");
            });

        });
    </script>

</head>
<body>
<ul id="countdown">
    <li style="width: 465px; font-size: 16px; padding:7px;">
        <span>All tickets are editable before noon of the first game.  Please make sure you have all of your tickets.  If a ticket is registered to you, and is not set up, it will get auto easy picked.</span>
    </li>
    <li>
        <span class="days">00</span><br/>
        <span class="timeRef">days</span>
    </li>
    <li>
        <span class="hours">00</span><br/>
        <span class="timeRef">hours</span>
    </li>
    <li>
        <span class="minutes">00</span><br/>
        <span class="timeRef">minutes</span>
    </li>
    <li>
        <span class="seconds">00</span><br/>
        <span class="timeRef">seconds</span>
    </li>
</ul>
</body>
</html>