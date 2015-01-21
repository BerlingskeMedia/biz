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
    
});