$(document).ready(function(){
    //activate lightbox
    if( ! /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        $('.zoom').lightBox({
            overlayOpacity: 0.7,
            imageLoading: 'http://kokonut.no/images/loading.gif',
            imageBtnClose: 'http://kokonut.no/images/close.gif',
            imageBlank: 'http://kokonut.no/images/blank.gif'
        });
    }

    //smooth scroll-to-top
    $('.go-to-top').live('click', function() {
        $('html, body').animate({ 
            scrollTop: 0 
        }, 1000);
        return false;
    });
});