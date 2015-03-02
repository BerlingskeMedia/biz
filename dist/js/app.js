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





var activityIndicatorOn = function()
      {
        $( '<div id="imagelightbox-loading"><div></div></div>' ).appendTo( 'body' );
      },
      activityIndicatorOff = function()
      {
        $( '#imagelightbox-loading' ).remove();
      },


      // OVERLAY

      overlayOn = function()
      {
        $( '<div id="imagelightbox-overlay"></div>' ).appendTo( 'body' );
      },
      overlayOff = function()
      {
        $( '#imagelightbox-overlay' ).remove();
      },
// CLOSE BUTTON

      closeButtonOn = function( instance )
      {
        $( '<button type="button" id="imagelightbox-close" title="Close"></button>' ).appendTo( 'body' ).on( 'click touchend', function(){ $( this ).remove(); instance.quitImageLightbox(); return false; });
      },
      closeButtonOff = function()
      {
        $( '#imagelightbox-close' ).remove();
      },

// CAPTION


      captionOn = function()
      {
        var description = $( 'a[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"] img' ).attr( 'alt' );
        if( description.length > 0 )
          $( '<div id="imagelightbox-caption">' + description + '</div>' ).appendTo( 'body' );
      },
      captionOff = function()
      {
        $( '#imagelightbox-caption' ).remove();
      },

arrowsOn = function( instance, selector )
      {
        var $arrows = $( '<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>' );

        $arrows.appendTo( 'body' );

        $arrows.on( 'click touchend', function( e )
        {
          e.preventDefault();

          var $this = $( this ),
            $target = $( selector + '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ),
            index = $target.index( selector );

          if( $this.hasClass( 'imagelightbox-arrow-left' ) )
          {
            index = index - 1;
            if( !$( selector ).eq( index ).length )
              index = $( selector ).length;
          }
          else
          {
            index = index + 1;
            if( !$( selector ).eq( index ).length )
              index = 0;
          }

          instance.switchImageLightbox( index );
          return false;
        });
      },
      arrowsOff = function()
      {
        $( '.imagelightbox-arrow' ).remove();
      };

var selectorG = 'a[data-imagelightbox="g"]';
var instanceG = $( selectorG ).imageLightbox(
{
  // onStart:    function() { overlayOn(); closeButtonOn( instanceF ); arrowsOn( instanceF, selectorF ); },
  //     onEnd:      function() { overlayOff(); captionOff(); closeButtonOff(); arrowsOff(); activityIndicatorOff(); },

  onStart:    function(){ overlayOn(); arrowsOn( instanceG, selectorG ); closeButtonOn( instanceG ) },
  onEnd:      function(){ captionOff(); overlayOff(); arrowsOff(); activityIndicatorOff(); closeButtonOff();},
  onLoadStart:  function(){ captionOff(); activityIndicatorOn(); },
  onLoadEnd:    function(){ captionOn(); $( '.imagelightbox-arrow' ).css( 'display', 'block' ); activityIndicatorOff(); }
});



  // Gallery caption show / hide
  $('.gallery-btn-show-caption').on('click', function() {
    var button = $(this);
    var caption = $(this).closest('.gallery-overlay').find('.gallery-caption');
    
    caption.toggleClass('show-caption');
    
    if ((caption).hasClass('show-caption')) {
      $(this).text('Skjul beskrivelse'); 
    } else {
      $(this).text('Vis beskrivelse'); 
    }
  });

  // Hide gallery
  $('.gallery-close').on('click', function() {
    $('.gallery-overlay').fadeOut('fast');
  });





});