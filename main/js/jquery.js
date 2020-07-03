$(document).ready(function(){
    
    //Fixed Main Navigation
    var mainNav = $('.main-nav');
    var fixedNav = () => {
        if($(window).scrollTop() > 120) {
            
            mainNav.addClass('main-nav-fixed');
            
        }
        if($(window).scrollTop() < 120) {
            mainNav.removeClass('main-nav-fixed');
        }
    };
    $(window).scroll(function(){
        fixedNav();
    });


    // var sidebar = $('.sidebar');
    // var fixedNav = () => {
    //     if($(window).scrollTop() > 120) {
            
    //         sidebar.addClass('sidebar-fixed');
            
    //     }
    //     if($(window).scrollTop() < 120) {
    //         sidebar.removeClass('sidebar-fixed');
    //     }
    // };
    // $(window).scroll(function(){
    //     fixedNav();
    // });
    //----filter-by on click -----//

    $('.filter-by > div > div:nth-child(1)').click(function(){

        var i = $(this).find('.fa-angle-left');
        var content = $(this).next();
        i.toggleClass('angle-down');
        content.slideToggle(600);
    });

    //------image active-------//


    $('.small-images img').hover(function(){
        $(this).attr('id','img-active');
        console.log('done')
    },function(){
        $(this).attr('id','');
    });

    //-------sidemenu--------//

    $('.closing').click(function(){
        $('.side-menu').css({'right':'-100%'});
    });
    
    $('.burger-menu').click(function(){
        $('.side-menu').css({'right':'0'});
    });
    
    //side search
    $('.closing-search').click(function(){
        $('.side-search').css({'right':'-110%'});
    });

    $('.search-icon').click(function(){
        $('.side-search').css({'right':'0'});
    });


    //filter

    $('.closing-filter').click(function(){
        $('.filter').css({'right':'-100%'});
    });

    $('.filter-icon').click(function(){
        $('.filter').css({'right':'0'});
    });

    //user-box

    $('.get-user-box').click(function(){
        $('.user-window').css({'display':'block'});
    });

    $('.closing-user-box i').click(function(){
        $('.user-window').css({'display':'none'});
    });

    $('.reg').click(function(){
        $(this).css({'border-bottom':'2px solid #51c0a9','color':'#51c0a9'});
        $('.log').css({'border-bottom':'2px solid #ddd','color':'#000'});
    });

    $('.log').click(function(){
        $(this).css({'border-bottom':'2px solid #51c0a9','color':'#51c0a9'});
        $('.reg').css({'border-bottom':'2px solid #ddd','color':'#000'});
    });

    $('#login').click(function(){
        $('.register').css({'display':'none'});
        $('.login').css({'display':'block','animation':'login 0.3s ease 1'});
    });
    $('#register').click(function(){
        $('.login').css({'display':'none'});
        $('.register').css({'display':'block','animation':'register 0.3s ease 1'});
        
    });

    //active links color
    console.log("current page: ",window.location.href);
    $('.href-link').each(function(){
        if (window.location.href.indexOf($(this).attr('href')) > -1) {
            console.log($(this).attr('href') +" is active ");
            $(this).addClass('active-main-link');
        }

    });
    $('.href-phone').each(function(){
        if (window.location.href.indexOf($(this).attr('href')) > -1) {
            console.log($(this).attr('href') +" is active ");
            $(this).addClass('active-main-phone');
        }

    });


});