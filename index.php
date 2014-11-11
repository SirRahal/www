<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 11/11/14
 * Time: 1:23 PM
 */ ?>

<html>
<head>
    <title>eBay Search Results</title>
</head>
<body>
<h1>eBay Search Results</h1>
<div id="results"></div>

<script>
    function _cb_findItemsByKeywords(root)
    {
        var items = root.findItemsByKeywordsResponse[0].searchResult[0].item || [];
        var html = [];
        html.push('<table width="100%" border="0" cellspacing="0" cellpadding="3"><tbody>');

        for (var i = 0; i < items.length; ++i)
        {
            var item     = items[i];
            var title    = item.title;
            var pic      = item.galleryURL;
            var viewitem = item.viewItemURL;
            var price    = item.currentPrice;

            if (null != title && null != viewitem)
            {
                html.push('<tr><td>' + '<img src="' + pic + '" border="0">' + '</td>' +
                    '<td><a href="' + viewitem + '" target="_blank">' + title + '</a></td><td>' + price +'</td></tr>');
            }
        }
        html.push('</tbody></table>');
        document.getElementById("results").innerHTML = html.join("");
    }
</script>

<!--
Use the value of your appid for the appid parameter below.
-->
<script src=http://svcs.ebay.com/services/search/FindingService/v1?SECURITY-APPNAME=nuteksal-1a23-4cc6-bee4-61c507ae977f&OPERATION-NAME=findItemsByKeywords&SERVICE-VERSION=1.0.0&RESPONSE-DATA-FORMAT=JSON&callback=_cb_findItemsByKeywords&REST-PAYLOAD&keywords=iphone&paginationInput.entriesPerPage=5>
</script>
</body>
</html>​