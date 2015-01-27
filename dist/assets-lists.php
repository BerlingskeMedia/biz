<!-- READ ALSO -->
               
                <section class="module-top-lg module">
                
              <h1 class="section-header">Read also</h1>
              
              <ul class="list list-xs ">
              <? while (dumb_luck("5")): ?>
                <li class="teaser">
                  <div class="teaser-body">
                  <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
                  <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
                  </div>
                  </li>
                <? endwhile ?>
              </ul>

              </section><!-- read also -->
              


              <div class="row">
                
              <div class="col-md-6">
                
                 <section>
                
              <h1 class="section-header">Read also</h1>
              
              <ul class="list list-xs ">
              <? while (dumb_luck("5")): ?>
                <li class="teaser">
                  <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></div>
                  </li>
                <? endwhile ?>
              </ul>

              

              </section><!-- read also -->


              </div><!-- col -->
              <div class="col-md-6">
              
                  
      <section>
    <h1 class="section-header">Most read</h1>
      <ul class="list toplist toplist-lg list-xs list-image-right">
        <? while (dumb_luck("5")): ?>
          <li class="teaser">
          <? if (dumb_luck("66%")): ?><figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@50x50,") ?>" width="" height="" alt="" /></a></figure><? endif ?>
          <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></div>
          </li>
        <? endwhile ?>
      </ul>
      </section>

                  

              </div>
              </div>