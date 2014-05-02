/**
 * Created with JetBrains PhpStorm.
 * User: Sari
 * Date: 12/18/13
 * Time: 2:01 PM
 * To change this template use File | Settings | File Templates.
 */

$(document).ready(function(){

    $('.tabs a').each(function(){
        $(this).click(function(){

            jQuery('.activeTab').removeClass('activeTab');
            $(this).addClass('activeTab')
            $('.tabContent').slideUp();
            var tabSelector = $(this).attr('tabSelector');
            $('#' + tabSelector).slideDown();
        })

    })


})