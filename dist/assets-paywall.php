<? require_once("../../dummy/dummy.php") ?>
<!DOCTYPE html>
<html lang="da">
  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body class="show-paywall">
  
  <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->


<div class="modal fade" id="modal-login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Luk"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Log ind på Business.dk</h4>
      </div>
      <div class="modal-body">
        <p>Log ind eller bliv medlem</p>
        <p>Her kommer en log ind formular</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Luk</button>
        <button type="button" class="btn btn-success btn-sm">Log ind</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="article-metered">

  
  <div class="container">
  <div class="row">
    


 <? if (dumb_luck("100%")): ?>

<div class="col-sm-12">
  <p class="hidden-md hidden-lg text-center">Du har ikke flere gratis artikler tilbage</p>
</div>


<div class="col-md-3 col-sm-12">
  <figure><img src="images/paywall-desktop.jpg" class="img-responsive"></figure>
</div>


<div class="col-md-9 col-sm-12">
 
<p class="hidden-xs hidden-sm">Du har ikke flere gratis artikler tilbage</p>
<h1 class="payheader2">
<span class="line-3">Tegn abonnement på Berlingske.dk og Business.dk</span>
<span class="line-4">Første måned fra kr. 29,- <a href="http://b.kundeunivers.dk/koeb-abonnement/b?r=Yml6X3BheXdhbGw=&return_url=http://www.business.dk&callback_url=http://login.berlingskemedia.net/sso/server/multisite-update/biz&ns_campaign=_Kundeunivers_abonnement_berlingske&ns_mchannel=&ns_source=Abonnement_link_bus&ns_linkname=link_top&ns_fee=&sa=D&usg=ALhdy2-kiZDD7y8npyIWBt91N-LT6BJ85w"  class="btn btn-success btn-lg" >Se tilbud <i class="fa fa-caret-right"></i></a></span>
</h1>



 <p><strong><a href="#" class="" data-toggle="modal" data-target="#modal-login">Log ind</a></strong> hvis du allerede har et abonnement.</p>

 <p class="small">Brug for hjælp? Ring til Kundeservice på 33 75 36 36 mandag - fredag kl. 08 - 17.</p>
</div>

<? else: ?>
  <div class="col-md-12">
  <h1 class="payheader">
    <span class="line-1">Kære læser</span>
    <span class="line-2">Vil du læse videre?</span>
  </h1>

  <p>Du har læst 10 gratis artikler på B.dk inden for de seneste 30 dage. Vi håber, du har nydt dem.</p>
  <p><button class="btn btn-primary btn-sm">Køb abonnement <i class="fa fa-caret-right"></i></button>  eller <strong><a href="#" data-toggle="modal" data-target="#modal-login">log ind</a></strong> for at fortsætte.</p>
  <p class="small">Brug for hjælp? Ring til Kundeservice på 33 75 36 36 mandag - fredag kl. 08 - 17.</p>

</div>
<? endif ?>

    
    
  </div>
</div>
</div>




  <?php include("./inc/scripts.php"); ?>



  </body>
</html>