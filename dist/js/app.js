$(function () {


    $('.show-comments').on('click', function(){
          var disqus_shortname = 'biztesting'; 
 
          $.ajax({
                  type: "GET",
                  url: "http://" + disqus_shortname + ".disqus.com/embed.js",
                  dataType: "script",
                  cache: true
          });
          // hide the button once comments load
          $(this).fadeOut();
    });


    // Navigation
    var sw = $('.site-wrap');
    if (sw.length && sw.offset() && $('.main-header-bottom').length) {
        sticky_navigation_offset_top = $('.main-header-bottom').offset().top;
    }
    var sticky_navigation = function () {
        var scroll_top = $(window).scrollTop();


        if (scroll_top > sticky_navigation_offset_top) {
            $('body').addClass('make-fixed-menu');
        } else {
            $('body').removeClass('make-fixed-menu');
        }
    };

    sticky_navigation();
    $(window).on('resize scroll', function () {
        sticky_navigation();
    }).resize();


    // toggle search 
    $('.menu-search a, .btn-close-search, .toggle-global-search').on('click', function (e) {
        e.preventDefault();
        var searchHeader = $('body');

        if ((searchHeader).hasClass('show-search')) {
            searchHeader.removeClass('show-search');
        } else {
            searchHeader.addClass('show-search');
            $('#site-search').focus();
        }

    });


    $('.btn-close-latest').on('click', function () {
        $('body').removeClass('show-latest');
    });


    // Toggle latest news. Show slide-in if viewport is iPad or phone
    $('.menu-latest a').on('click', function(e){
      e.preventDefault();
        $('body').toggleClass('show-latest');
    });


    // Mobile Nav toggle
    $('.btn-toggle-nav, .close-menu').on('click', function (e) {
        e.preventDefault();
        $('.mobile-main-nav .active-sub').removeClass('active-sub');
        $('body').toggleClass('show-menu');
    });

    // Close slider navs
    $('.exit-mobile-nav').on('click', function (e) {
        e.preventDefault();
        $('body').removeClass('show-menu');
        $('body').removeClass('show-latest');
    });

    // Show subs on mobile menu 
    $('.mobile-main-nav').on('click', '.show-sub', function (e) {
        var parentItem = $(this).closest('li');

        e.preventDefault();

        if (parentItem.hasClass('active-sub')) {
            parentItem.removeClass('active-sub');
        } else {
            // $('.mobile-main-nav .active-sub').removeClass('active-sub');
            parentItem.addClass('active-sub');
        }
    });


    // Show social icons on scrolling
    if (sw.length) {
        sw.offset().top;
    } else {
        0;
    }
    var showShareMenu = $('.article-social-top');
    var lastScrollTop = 0;
    var body = $('body');

    if (showShareMenu.length) {
        showShareMenu = showShareMenu.offset().top;
    }

    $(window).scroll(function (event) {
        var y = $(this).scrollTop();

        if (showShareMenu) {
            if (y >= showShareMenu && y >= lastScrollTop)
                body.addClass('show-social-menu');
            else
                body.removeClass('show-social-menu');
        }
        lastScrollTop = y
    });


    // SEARCH 
    $('toggle-search').on('click', function () {
        $('.global-search').toggleClass('show-search');
    });

    // ARTICLE FACTBOX 
    $('.article-fact:not(.show) .fact-toggle').on('click', function () {
        $(this).closest('aside').addClass('show');
    });


    // Scroll to top of factbox
    $('.fact-close').on('click', function () {
        var factTop = $(this).closest('aside');
        $(this).closest('aside').removeClass('show');
        $('html,body').animate({
            scrollTop: factTop.offset().top - 100
        }, {
            duration: 200
        });
    });


    // Responsive videos in articles
    $('.article-content').fitVids();


    // Scroll to comments
    $('.scroll-comments').on('click', function (e) {
        e.preventDefault();
        var comments = $('#article-comments');
        $('html,body').animate({
            scrollTop: comments.offset().top
        }, {
            duration: 1500
        });
    });

    // Scroll to comments
    $('.scroll-to-buy').on('click', function () {
        var buyOptions = $('#article-buy-options');
        $('html,body').animate({
            scrollTop: buyOptions.offset().top - 100
        }, {
            duration: 1500
        });
    });

    // GLOBAL TOGGLE SCRIPT
    $('.toggle-btn').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.toggle-container').toggleClass('toggle-active');
        $(this).closest('.toggle-container').find('.toggle-content').slideToggle('fast');
    });

    // RESPONSIVE MENU
    $('.nav-toggle').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.nav-responsive').toggleClass('show-nav');
    });

    // Javascript to enable link to tab
    var url = document.location.toString();
    if (url.match('#')) {
        $('.nav-tabs a[href=#' + url.split('#')[1] + ']').tab('show');
    }

// Change hash for page-reload
    $('.nav-tabs a').on('shown', function (e) {
        window.location.hash = e.target.hash;
    });

    $('.image-carousel').slick({
        infinite: true,
        slidesToShow: 1,
        lazyLoad: 'ondemand',
        slidesToScroll: 1
    });

    $('.toggle-caption').on('click', function () {
        $(this).closest('.article-slider').toggleClass('show-caption');
    });

// This is a test code just to hide the message. Not a real cookie warning....
    $('.btn-closecookie').on('click', function () {
        $(this).closest('.cookiewarning').remove();
    });

    $('.icon-social-share').on('click', function (e) {
        e.preventDefault();
        $(this).closest('div').find('.mobile-menu').toggleClass('active');
    });

    $('.close-paywall-overlay').click(function(e){
        e.preventDefault();

        var addOverflow = function(){
            // $('.article-body').css('overflow', 'visible');
            $('.article-body--cutoff').removeClass('article-body--cutoff');
        };
        $('.paywall').fadeToggle('fast');
        
        setTimeout(addOverflow, 500);
    });

     
    // BUSINESS LIVE --- Char counter
    $("#live-user-comment").keyup(function () {
      var cmax = 250;
      if ($(this).val().length >= cmax) {
        $("#charCounter").addClass("limit");
      } else {
          $("#charCounter").removeClass("limit");
      }
      $("#charCounter").text(cmax - $(this).val().length);
    });

    // BUSINESS LIVE --- Email validator
    function validateEmail($email) {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      return emailReg.test( $email );
    }

    // BUSINESS LIVE --- Field validation

    var checkFields = function(){
        var fields = $("#live-form input, #live-form textarea");
        var isValid;
        $(fields).each(function() {
           var element = $(this);

           if (element.val() == "") {
               isValid = false;
               event.preventDefault();
                 
               
               if(!$(element).closest(".form-group").hasClass("has-error")) {
                $(element).next(".form-control-errormessage").html($(element).data("error")); 
                $(element).focus();
               } 
               $(element).closest(".form-group").addClass("has-error");
               return false;

            } else {
                $(element).closest(".form-group").removeClass("has-error");
            }
        });
        
        
    };


    // BUSINESS LIVE --- Send form. 
    

    $( "#live-form" ).submit(function( event ) {
        var message = $('#live-user-comment').val();  
        var emailaddress =  $('#live-user-email').val();
        
        // first check if we have empty fields
        

        
      if (message.length >= 250){ // Then check if we have a message that is too long
            event.preventDefault();
            $("#live-user-comment").closest(".form-group").addClass("has-error");
            $("#live-user-comment").next(".form-control-errormessage").html("<span class='form-control-errormessage'>Din besked er for lang</span>"); 
            return false;
      } else if (!validateEmail(emailaddress)) { // Then check if Email address is valid

            event.preventDefault();
            $("#live-user-email").closest(".form-group").addClass("has-error");
            $("#live-user-email").next(".form-control-errormessage").html("<span class='form-control-errormessage'>Skriv venligst din e-mail</span>"); 
      } 

        checkFields(); 
        
      
    });

    $('.toggle-usercomment-form, .live-close-comment').click(function(e){
        e.preventDefault();
        $('.live-user-commentform').slideToggle('fast', 'linear');

    });

});
