<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 10/2/14
 * Time: 4:31 PM
 */ ?>



        <link href="/js/jquery_news_ticker/styles/ticker-style.css" rel="stylesheet" type="text/css" />
        <script src="/js/jquery_news_ticker/includes/jquery.ticker.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(function () {
            $('#js-news').ticker();
        });
    </script>
    <body>
    <?php
    $latest_auctions = Auctions::model()->get_latest_auctions();
    ?>
    <ul id="js-news" >
        <?php
        foreach($latest_auctions as $auction){ ?>
            <li class="news-item"><a href="<?php echo $auction->url; ?>">[Auction Posting] : <?php echo $auction->company.' - '.$auction->company; ?></a></li>
        <?php }
        ?>
        <li class="news-item"><a href="#">This is the 1st latest news item.</a></li>
        <li class="news-item"><a href="#">This is the 2nd latest news item.</a></li>
        <li class="news-item"><a href="#">This is the 3rd latest news item.</a></li>
        <li class="news-item"><a href="#">This is the 4th latest news item.</a></li>
    </ul>
    </body>