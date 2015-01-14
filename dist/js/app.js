$(function () {

    // SEARCH 
    $('.toggle-search').on('click', function() {
    	$('.global-search').toggleClass('show-search');
    });

    // ARTICLE FACTBOX 
    $('.fact-toggle').on('click', function() {
    	$(this).closest('.article-fact').toggleClass('show');
    });
});