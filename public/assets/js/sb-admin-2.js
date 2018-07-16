/*!
 * Start Bootstrap - SB Admin 2 v3.3.7+1 (http://startbootstrap.com/template-overviews/sb-admin-2)
 * Copyright 2013-2016 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */
 $(function() {
    $('#side-menu').metisMenu();
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    var width = $(window).width();
    if (width < 768) {
        $('div.navbar-collapse').addClass('collapse');
        $(window).scrollTop(0);
    } else {
        $('div.navbar-collapse').removeClass('collapse');
    }

    $('.spinner').fadeOut(); 
    $('.preloader').delay(350).fadeOut(500);


    $(window).on("resize", function() {
        var topOffset = 50;
        var width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        console.log(width)
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        // var height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        // height = height - topOffset;
        // if (height < 1) height = 1;
        // if (height > topOffset) {
        //     $("#page-wrapper").css("min-height", (height) + "px");
        // }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent();

    while (true) {
        if (element.is('li')) {
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }

   //  $('.table-responsive').on('show.bs.dropdown', function () {
   //     $('.table-responsive').css( "overflow", "inherit" );
   // });

   //  $('.table-responsive').on('hide.bs.dropdown', function () {
   //     $('.table-responsive').css( "overflow", "auto" );
   // })
});
