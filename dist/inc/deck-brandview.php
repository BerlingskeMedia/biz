 <section class="deck-display">
        




        <div class="row">

          <div class="col-md-12">
          
            
            <h1 class="section-header">Datasikkerhed</h1>
        

            
          

          </div>
        </div>

        <div class="row">

          <? while (dumb_luck("2")): ?>

          <div class="col-md-6 col-sm-6 col-xs-6">

          <article class="teaser teaser-brandview header-20">
            <figure class="teaser-img">
            <a href="article-brandview.php"><img src="<? dummy("image@900x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a>
            </figure>
            <div class="teaser-body">
          <h2 class="header"><a href="article-brandview.php"><? dummy("text@headline") ?></a></h2>
          <p>I samarbejde i <? dummy("text@company-names") ?></p>
          </div>
          </article>
          </div>

          <? endwhile ?>
          

        </div><!-- row -->

        <div class="row">
          
          <? while (dumb_luck("4")): ?>
          <div class="col-md-3 col-sm-3 col-xs-6">
          <article class="teaser teaser-brandview header-15">
            <figure class="teaser-img">
              <a href="article-brandview.php"><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a>
            </figure>
            <div class="teaser-body">
            <h2 class="header"><a href="article-brandview.php"><? dummy("text@headline") ?></a></h2>
            <p>I samarbejde i <? dummy("text@company-names") ?></p>
            </div>
          </article>
          </div>
          <? endwhile ?>

        </div><!-- row -->

        <div class="row">
          <div class="col-md-12 text-center">
            <button class="btn btn-sm btn-primary">Load more <i class="fa fa-caret-down"></i></button>
          </div>
        </div>

      </section>