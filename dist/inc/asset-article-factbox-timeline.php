<div class="sm-notitification">Article continues after factbox... </div>
<aside class="article-fact article-fact-float-right article-fact-timeline">

  <h1><? dummy("text@headline") ?></h1>
  <div class="fact-content mousescroll">
  <ul class="list-timeline ">
  <? while (dumb_luck("2-6")): ?>
  	<li><span class="time"><? dummy("text@date-long") ?></span>
  		<h2><? dummy("text@teaser") ?></h2>
  		<? if (dumb_luck("33%")): ?><p><? dummy("text@teaser") ?></p><? endif ?>
  </li><? endwhile ?>
  </ul>
  </div>
  <? if (dumb_luck("50%")): ?><p class="fact-cite" >Source: <a href="#"><? dummy("text@item") ?></a> <? dummy("text@teaser") ?></cite><? endif ?>
  
</aside><!-- Article factbox -->