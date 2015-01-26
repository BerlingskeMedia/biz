<div class="article-byline">
  <? while (dumb_luck("1-3")): ?>
    <div class="article-author">
      <figure><img src="<? dummy("image/!author@30x30,") ?>" width="" height="" alt="" /></figure>
      <span><? dummy("text@author") ?></span><br>
        <div class="btn-group">
  <a href="#" type="button" class="dropdown-toggle author-follow" data-toggle="dropdown">
    Følg <span class="caret"></span>
  </a>
  <ul class="dropdown-menu dropdown-follow-author" role="menu">
    <li><a href="#" data-toggle="modal" data-target="#follow-author"><i class="fa fa-envelope-o"></i> Abonnér på artikler (gratis)</a></li>
    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
    <li class="dropdown-divider"></li>
    <li><a href="author.php"><i class="fa fa-user"></i> Se profil</a></li>
  </ul>
</div>
      <!-- <a href="#" class="follow-author">Follow <i class="fa fa-caret-down"></i></a></span> -->
    </div>
  <? endwhile ?>


<!-- Modal -->
<div class="modal fade" id="follow-author" tabindex="-1" role="dialog" aria-labelledby="Follow author" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        
      </div>
      <div class="modal-body">

      <? if (dumb_luck("50%")): ?><!-- If user is logged in -->
      <p><i class="fa fa-check color-green"></i> You are now subscribing to <? dummy("text@author") ?>'s articles (initials@somesite.com). </p>
      <p class="small"><a href="page-profile.php">Edit your subscriptions</a></p>
      <? else: ?>
      <!-- If user is NOT logged in -->
      <p >Modtag e-mail når <? dummy("text@author") ?> publicerer en ny artikel</p>
      <form class="form-signup">
      <div class="form-group form-oneline ">
              <input type="email" id="signup" class="form-control input-sm" placeholder="Indtast din email">
              <button class="btn btn-sm btn-primary btn-sm ">Sign up</button>
            </div>
          </form>
          <? endif ?>
        

      </div>
      
    </div>
  </div>
  
</div>


</div>    

