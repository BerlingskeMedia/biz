$(function () {

    // SEARCH 
    $('.toggle-search').on('click', function() {
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

// $(window).scroll(function() {
//     $('.theme-cover').each(function(){
//     var imagePos = $(this).offset().top;

//     var topOfWindow = $(window).scrollTop();
//       if (imagePos < topOfWindow+800) {
//         $(this).addClass("in-screen");
//       }
//     });
//   });

});