$(document).ready(function(){
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if(scroll >= 155) {
            $('header nav.navbar').css({
                'position':'fixed',
                'top':'0',
                'width':'100%'
            });
            $('.navbar-brand img').css({
                'display':'inline-flex',
                'margin-left':'10rem'
            });
        }
        else {
            $('header nav.navbar').css({
                'position':'unset'
            });
            $('.navbar-brand img').css({
                'display':'none'
            });
        }

    });

    $('#myCarousel').carousel({
        interval: 5000
    });

    fixedFooter();
});

function fixedFooter() {
    if($(document).height() <= 900){
        $('footer').css({
            'position': 'fixed',
            'bottom': '0',
            'width': '100%'
        });
    }
    else {
        $('footer').css({
            'position': 'unset!important'
        });
    }
}

function xoaBaiViet() {
    confirm('Xác nhận xóa ?');
}