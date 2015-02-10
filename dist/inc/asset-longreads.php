
<section class="deck"> 
<div class="col-md-12 ">
   <div class="deck-header">
      <h1>Longreads</h1>
      <a href="section.php" class="section-header-link">Se alle <i class="fa fa-caret-right"></i></a>
    </div>
<div class="theme-splash">

  

  <? while (dumb_luck("3")): ?>
    <article class="teaser-splash">
    <a href="article-longread.php">
      <div class="teaser-body">
        <h2 class="header"><? dummy("text@headline") ?></h2>
      </div>
      <div class="splash-img" style="background-image: url(<? dummy("image/!longread@800x,1:1") ?>)"></div>
      </a>
    </article>
  <? endwhile ?>


</div>        
</div>
</section>