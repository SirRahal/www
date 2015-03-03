<!DOCTYPE html>
<html>
<head>
    <title>jQuery countdown plugin - devingredients.com</title>
    <script type="text/javascript" src="/js/countdown.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#countdown").countdown({
                date: "19 march 2015 12:00:00" // add the countdown's end date (i.e. 3 november 2012 12:00:00)
            }, function() {
                alert("Tournament Has Begun!");
            });

        });
    </script>

</head>
<body  >
<div class="space_div"></div>
<div class="countdown_div">
    <ul id="countdown">
        <div  class="countdown_text">
            <li class="countdown_text">
                TOURNAMENT COUNTDOWN<div style="font-size: 40px;">ENTRY DEADLINE</div>
            </li>
        </div>
        <div class="coutdown_time">
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
        </div>
    </ul>
</div>
</body>
</html>