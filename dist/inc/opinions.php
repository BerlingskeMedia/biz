
<section class="deck">
        
        <div class="col-md-12">
        <div class="deck-header">
          <h1>Meningsdannerne</h1>
          <p>Blogs fra Berlingske, Politiko og Business</p>
        </div>
          
          
        </div>

<div class="col-md-12">
<div role="tabpanel" class="tabs">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs-sm" role="tablist">
    <li role="presentation" class="active"><a href="#tab-blogs-1" aria-controls="tab-blogs-1" role="tab" data-toggle="tab">Seneste</a></li>
    <li role="presentation"><a href="#tab-blogs-2" aria-controls="tab-blogs-2" role="tab" data-toggle="tab">Mest læste</a></li>
    <li role="presentation"><a href="#tab-blogs-3" aria-controls="tab-blogs-3" role="tab" data-toggle="tab">Mest kommenterede</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="tab-blogs-1">
       <ul class="list-clean flex-6-3-2">
            <? while (dumb_luck("6")): ?>
            <li>
              <article class="teaser teaser-round col-md-2 col-sm-4 col-xs-6">
              <figure class="teaser-img"><a href="#"><img src="<? dummy("image/!author@100x100,") ?>" width="" height="" alt="" /></a></figure>
              <footer><span class="author"><? dummy("text@author") ?></span></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
              <footer><span class="sitename">blogs.business.dk</span></footer>
              </article>
            </li>
            <? endwhile ?>
        </ul>

    </div>
    <div role="tabpanel" class="tab-pane fade" id="tab-blogs-2">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="tab-blogs-3">
        <div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
        </div>
    </div>
    
  </div>
</div>
</div>

       
</section>