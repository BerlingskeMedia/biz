<div class="image-carousel article-slider">
<? while (dumb_luck("3-5")): ?>
  <div class="slide">
    <figure class="article-image">
      <img data-lazy="<? dummy("image@940x,16:9") ?>" alt="" class="img-responsive" />
      <? if (dumb_luck("90%")): ?>
      <figcaption>
      <div class="toggle-caption"><span>Caption</span></div>
      
      <div class="caption-body"><i class="fa fa-camera"></i> <? dummy("text@teaser") ?> <span> Foto: <? dummy("text@author") ?></span></div></figcaption>

      <? endif ?>
      
    </figure>
  </div><!-- slide -->
<? endwhile ?>
</div><!-- slider -->