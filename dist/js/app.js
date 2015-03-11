$(function () {

    // Navigation
    var sticky_navigation_offset_top = $('.main-header-bottom').offset().top;
    
    var sticky_navigation = function()  {
    var scroll_top = $(window).scrollTop(); 
    
    if (scroll_top > sticky_navigation_offset_top && $('body').not('.show-menu')) {
      $('body').addClass('make-fixed-menu');
    } else {
        $('body').removeClass('make-fixed-menu');
      }
    };
  
    sticky_navigation();
    $(window).on('resize scroll', function() {
      sticky_navigation();
    }).resize();
    


    $('.menu-search a, .btn-close-search, .toggle-global-search').on('click', function(e){
      e.preventDefault();
      var searchHeader = $('body');

      if ((searchHeader).hasClass('show-search')) {
        searchHeader.removeClass('show-search'); 
      } else {
        searchHeader.addClass('show-search'); 
        $('#site-search').focus();
      }

    })


    // Mobile Nav toggle 
    $('.btn-toggle-nav, .close-menu').on('click', function(e) {
      e.preventDefault();
      $('body').toggleClass('show-menu');
    });

    $('.main-nav').on('click', '.show-sub', function(e) {
      var parentItem = $(this).closest('li');
      
        e.preventDefault();
        
        if (parentItem.hasClass('active-sub')) {
          parentItem.removeClass('active-sub');
        } else {
          $('.main-nav .active-sub').removeClass('active-sub');
          parentItem.addClass('active-sub');  
        }
    });
    

      

    // SEARCH 
    $('toggle-search').on('click', function() {
    	$('.global-search').toggleClass('show-search');
    });

    // ARTICLE FACTBOX 
    $('.fact-fader').on('click', function() {
    	$(this).closest('.article-fact').toggleClass('show');
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
          scrollTop: buyOptions.offset().top - 40
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