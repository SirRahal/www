/**
 * Created by Sari on 6/9/14.
 */

$(document).ready(function() {
    //load page with users picks
    /*$('#content').load('/protected/views/site/container/my_picks_div');
    *///on click of the button, update picks
    $('ul#nav li a').click(function() {
       var page = $(this).attr('href');
        $('content').load('content/'.page);
    })
});

