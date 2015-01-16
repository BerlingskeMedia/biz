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

});