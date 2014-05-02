/*any time somone clicks on an ad, count the click in the database*/

/*jQuery(document).on('click','.ad', function(event){
    event.preventDefault();
    var url = $(this).attr('href');
    $.post('/js/ad_clicks.php',{url: url},function(data){window.location=url});
})*/


/*any time somone clicks on an ad, count the click in the database*/
jQuery(document).on('click','.ad', function(){
    var url = $(this).attr('url');
    $.post('/index.php/ads/registerClick',{url: url});
})

/*any time somone clicks on an auction, count the click in the database*/
jQuery(document).on('click','.auction', function(){
    var url = $(this).attr('url');
    $.post('/index.php/auctions/registerClick',{url: url});
})
/*any time somone clicks on an issue, count the click in the database*/
jQuery(document).on('click','.issue', function(){
    var url = $(this).attr('url');
    $.post('/index.php/issues/registerClick',{url: url});
})