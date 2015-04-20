$(function () {

    // Navigation
    if ($('.site-wrap').offset()) {
    var sticky_navigation_offset_top = $('.main-header-bottom').offset().top;
    };
    
    var sticky_navigation = function()  {
    var scroll_top = $(window).scrollTop();

  
    
    
    if (scroll_top > sticky_navigation_offset_top) {
      $('body').addClass('make-fixed-menu');
    } else {
        $('body').removeClass('make-fixed-menu');
      }
    };
  
    sticky_navigation();
    $(window).on('resize scroll', function() {
      sticky_navigation();
    }).resize();
    

    // toggle search 
    $('.menu-search a, .btn-close-search, .toggle-global-search').on('click', function(e){
      e.preventDefault();
      var searchHeader = $('body');

      if ((searchHeader).hasClass('show-search')) {
        searchHeader.removeClass('show-search'); 
      } else {
        searchHeader.addClass('show-search'); 
        $('#site-search').focus();
      }

    });


    
    $('.btn-close-latest').on('click', function(){
      $('body').removeClass('show-latest');
    });
  
  
    // Toggle latest news. Show slide-in if viewport is iPad or phone
    $('.menu-latest a').on('click', function(e){
      e.preventDefault();
      // if($(window).width()>992) {
      //   window.location =  $(this).attr('href');
      // } else {
        $('body').toggleClass('show-latest');   
      //}
    });



    // Mobile Nav toggle 
    $('.btn-toggle-nav, .close-menu').on('click', function(e) {
      e.preventDefault();
      $('.mobile-main-nav .active-sub').removeClass('active-sub');
      $('body').toggleClass('show-menu');
    });

    // Close slider navs
    $('.exit-mobile-nav').on('click', function(e) {
      e.preventDefault();
      $('body').removeClass('show-menu');
      $('body').removeClass('show-latest');
    });

    // Show subs on mobile menu 
    $('.mobile-main-nav').on('click', '.show-sub', function(e) {
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
    var top = $('.site-wrap').offset().top;
    var showShareMenu = $('.article-social-top');
    var lastScrollTop = 0;
    var body = $('body');

    if (showShareMenu.length) {
      showShareMenu = showShareMenu.offset().top;
    }
    // console.log (showShareMenu);

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
    $('toggle-search').on('click', function() {
    	$('.global-search').toggleClass('show-search');
    });

    // ARTICLE FACTBOX 
    $('.article-fact:not(.show) .fact-toggle').on('click', function() {
    	$(this).closest('aside').addClass('show');
    });


    // Scroll to top of factbox
    $('.fact-close').on('click',function(){
       var factTop = $(this).closest('aside');
       console.log (factTop);
      $(this).closest('aside').removeClass('show');
      $('html,body').animate({
          scrollTop: factTop.offset().top - 100
        },{
           duration: 200
        });
    });




    // Responsive videos in articles
    $('.article-content').fitVids();


     // Scroll to comments
    $('.scroll-comments').on('click',function(e){
      e.preventDefault();
      var comments = $('#article-comments')
      $('html,body').animate({
          scrollTop: comments.offset().top
        },{
           duration: 1500
        });
    });

     // Scroll to comments
    $('.scroll-to-buy').on('click',function(){
      var buyOptions = $('#article-buy-options')
      $('html,body').animate({
          scrollTop: buyOptions.offset().top - 100
        },{
           duration: 1500
        });
    });

    // GLOBAL TOGGLE SCRIPT
    $('.toggle-btn').on('click', function (e){
      e.preventDefault();
      $(this).closest('.toggle-container').toggleClass('toggle-active');
      $(this).closest('.toggle-container').find('.toggle-content').slideToggle('fast');
    })

    // RESPONSIVE MENU
    $('.nav-toggle').on('click',function(e){
      e.preventDefault();
      $(this).closest('.nav-responsive').toggleClass('show-nav');
    });
    
    // Javascript to enable link to tab
var url = document.location.toString();
if (url.match('#')) {
    $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
} 

// Change hash for page-reload
$('.nav-tabs a').on('shown', function (e) {
    window.location.hash = e.target.hash;
})

$('.image-carousel').slick({
    infinite: true,
    slidesToShow: 1,
    lazyLoad: 'ondemand',
    slidesToScroll: 1
});

$('.toggle-caption').on('click',function(){
  $(this).closest('.article-slider').toggleClass('show-caption');
})

// This is a test code just to hide the message. Not a real cookie warning....
$('.btn-closecookie').on('click', function(){
  $(this).closest('.cookiewarning').remove();
})





  // Gallery caption show / hide
  $('.gallery-btn-show-caption').on('click', function() {
    var buttonTxt = $(this).find('span');
    var caption = $(this).closest('.gallery-overlay');
    
    caption.toggleClass('show-caption');
    
    if ((caption).hasClass('show-caption')) {
      $(buttonTxt).text('Skjul beskrivelse'); 
    } else {
      $(buttonTxt).text('Vis beskrivelse'); 
    }
  });

  // Hide gallery
  $('.gallery-close').on('click', function() {
    $('.gallery-overlay').fadeOut('fast');
  });





});