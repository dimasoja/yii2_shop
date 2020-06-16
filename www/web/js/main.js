addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
}, false);
function hideURLbar() {
    window.scrollTo(0, 1);
}

(function () {
    if (typeof _bsa !== 'undefined' && _bsa) {
        // format, zoneKey, segment:value, options
        _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
    }
})();

(function () {
    if (typeof _bsa !== 'undefined' && _bsa) {
        // format, zoneKey, segment:value, options
        _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
    }
})();

(function () {
    if (typeof _bsa !== 'undefined' && _bsa) {
        // format, zoneKey, segment:value, options
        _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
    }
})();

window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-149859901-1');

window.ga = window.ga || function () {
    (ga.q = ga.q || []).push(arguments)
};
ga.l = +new Date;
ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
ga('require', 'eventTracker');
ga('require', 'outboundLinkTracker');
ga('require', 'urlChangeTracker');
ga('send', 'pageview');

$(function () {
    $("#slider").responsiveSlides({
        auto: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
    });
});


$(function () {
    var menu_ul = $('.menu > li > ul'),
            menu_a = $('.menu > li > a');
    menu_ul.hide();
    menu_a.click(function (e) {
        e.preventDefault();
        if (!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true, true).slideDown('normal');
        } else {
            $(this).removeClass('active');
            $(this).next().stop(true, true).slideUp('normal');
        }
    });

});

$(window).load(function () {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
});

function showCart(cart){
    $('#modal-cart .modal-body').html(cart);
    $('#modal-cart').modal();
    let cartSum = $('#cart-sum').text() ? $('#cart-sum').text() : '$0';
    if (cartSum){
        $('.cart-sum').text(cartSum);
    }
}

function getCart(){
     $.ajax({
        url: 'cart/show',        
        type: 'GET',
        success: function (res) {
           
           if(!res) alert('ошибка');
           showCart(res);
        },
        error: function(){
            alert('Error');
        }
    })
}

$('.add-to-cart').on('click', function(){
    let id = $(this).data('id');
    $.ajax({
        url: 'cart/add',
        data: {id: id}, 
        type: 'GET',
        success: function (res) {
           
           if(!res) alert('ошибка');
           showCart(res);
        },
        error: function(){
            alert('Error');
        }
    })
    return false;
})

$('#modal-cart .modal-body').on('click', '.del-item', function(){
    let id = $(this).data('id');
    $.ajax({
        url: 'cart/del-item',
        data: {id: id}, 
        type: 'GET',
        success: function (res) {
           
           if(!res) alert('ошибка');
           showCart(res);
        },
        error: function(){
            alert('Error');
        }
    })
})

function clearCart(){
   
     $.ajax({
        url: 'cart/clear',
        type: 'GET',
        success: function (res) {
           
           if(!res) alert('ошибка');
           showCart(res);
        },
        error: function(){
            alert('Error');
        }
    })
}