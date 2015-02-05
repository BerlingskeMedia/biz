<div class="theme-container theme-dark">
            
            <div class="theme-title col-md-3">
              <h2 class="theme-header">Business TV</h2>
              <p><a href="#">Se LIVE TV <i class="fa fa-caret-right"></i></a></p>
            </div>

            <div class="col-md-9">
            
              <div role="tabpanel">
  <ul class="nav nav-tabs-sm" role="tablist">
    <li role="presentation" class="active"><a href="#tab-tv-1" aria-controls="tab-tv-1" role="tab" data-toggle="tab">Latest</a></li>
    <li role="presentation"><a href="#tab-tv-2" aria-controls="tab-tv-2" role="tab" data-toggle="tab">Most viewed</a></li>
  </ul>


    
    <div class="tab-content row">

      <div role="tabpanel" class="tab-pane fade in active" id="tab-tv-1">
           <? while (dumb_luck("3")): ?>
              <article class="teaser col-md-4 col-sm-4 teaser-sx-400 ">
                <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a></figure>
                <h2 class="header"><a href="article.php"><span class="teaser-tag"><i class="fa fa-play"></i></span> <? dummy("text@headline") ?></a></h2>
              </article>
            <? endwhile ?>
        </div>

      <div role="tabpanel" class="tab-pane fade" id="tab-tv-2">

        <div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
        </div>

      </div>

    </div><!-- tab content -->
  </div><!-- tabpanel -->


            </div><!-- col 9 -->
</div><!-- theme dark -->
        