<? require_once("../../dummy/dummy.php") ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body class="article-large">
  <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->


  <?php include("./inc/header.php"); ?>

  <div class="container">
    <div class="rat-tail desktop-banner">
    <? dummy("ad@960x180") ?>
    <div class="banner-left">
      <? dummy("ad@160x600-2") ?>
    </div>
    <div class="banner-right">
      <? dummy("ad@160x600-2") ?>
    </div>
  </div>
   

  <div class="row">
    <div class="col-sm-4 col-md-offset-4 " >
    
      
      <div class="deck-header">
          <h1>Log ind</h1>
        </div>

      <form role="form" action="http://login.berlingskemedia.net/sso/server/login" accept-charset="UTF-8" method="post" id="user-login" class="ctools-use-modal-processed module">
    <div><div class="nocol-sm-offset-3 nocol-sm-6 nocol-xs-12">
      <div class="form-group has-feedback" id="edit-name-wrapper">
     <input type="text" maxlength="60" name="name" id="edit-name" size="60" value="" tabindex="1" class="form-text form-control required input-sm" placeholder="E-mail">
    </div>
      <div class="form-group has-feedback" id="edit-pass-wrapper">

    <input type="password" name="pass" id="edit-pass" maxlength="128" size="60" tabindex="1" class="form-text form-control required input-sm" placeholder="Adgangskode">
    </div>
      <span class="help-block small"><a href="/user/password" tabindex="5">Glemt adgangskode?</a></span>
      <div class="form-group" id="edit-bme-session-stay-logged-in-wrapper">
     <div class="checkbox"><label class="option"><small><input type="checkbox" name="bme_session_stay_logged_in" id="edit-bme-session-stay-logged-in" value="1" checked="checked" tabindex="1" class="form-checkbox"> Forbliv logget ind</small></label></div>
    </div>
      <div class="text-center">
        <input type="hidden" name="form_build_id" id="form-9dfa63f7974261537fb2156081466255" value="form-9dfa63f7974261537fb2156081466255">
    <input type="hidden" name="form_id" id="edit-user-login" value="user_login">
    <input type="hidden" name="short_site_name" id="edit-short-site-name" value="pol">
    <input type="hidden" name="return_to" id="edit-return-to" value="http://www.politiko.dk/sso/client/login?destination=www.politiko.dk%2Fforside&amp;error_destination=www.politiko.dk%2Fforside">
    <input type="hidden" name="assoc_handle" id="edit-assoc-handle" value="2015-03-16T11:30:13Zffa84c936baf04ee6943a3f191c8f8bf6596aa8db5eb06ded44e4f8d97371146">
    <input type="submit" name="op" id="edit-submit" value="Log ind" tabindex="1" class="btn btn-default form-submit btn-orange btn-block btn-primary">
      </div>
    </div>
    </div>
    </form>

    
    </div>
    
  </div>

  
  


    


  </div>

  

  </div><!-- container -->
    

    
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

  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>