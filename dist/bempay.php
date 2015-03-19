<? require_once("../../dummy/dummy.php") ?>

<?php $imageSize = rand(0,2); ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body class="page-bempay">



  <div class="container-fluid">
    
  <div class="col-md-12">
  
  <strong>Vælg produkt</strong>

  <form>
  <div class="module-sm border-bottom">
    <div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="product1" value="product1" >
    Businness Premium abonnement - 6 måneder – 3 000 kr.
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="product2" value="product2" >
    Businness Premium abonnement - 12 måneder – 5 000 kr.
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="product3" value="product3" >
    Køb "Danskernes kreditkort er rødglødende" – 49 kr.
  </label>
</div>
</div>
<div class="module-sm border-bottom">
  <div class="checkbox">
    <label>
      <input type="checkbox" value="" name="terms">
       Jeg accepterer <a href="#" target="_blank">Business.dk's betingelser</a>
    </label>
  </div>
</div>

<!-- if user is logged in: -->
<div class="module-sm border-bottom">
  Du er logget ind som <strong>bo@skakke.dk</strong>
</div>

<!--... or if user is unknown -->
<div class="module-sm border-bottom">
<p>For at kunne give dig adgang til artikler på Business.dk i fremtiden har vi brug for din e-mail</p>

<div class="form-group">
  <label for="email1">Email</label>
  <input type="email" class="form-control input-sm" id="email1" placeholder="Email">
</div>

<div class="form-group">
  <label for="email2">Bekræft email:</label>
  <input type="email" class="form-control input-sm" id="email2" placeholder="Bekræft email">
</div>

</div>

<div class="module-sm border-bottom">
  
  <div class="checkbox">
  <label>
    <input type="checkbox" value="" name="permission">
     <span class="micro">Ja tak, Berlingske Media må gerne kontakte mig via e-post (e-mail, sms, mms, videobeskeder mv.), når Berlingske Media eller Berlingske Medias samarbejdspartnere har tilbud på aviser, magasiner, rejser, oplevelser, sportsudstyr, bil og båd, tøj og mode, fødevarer, bolig, finans, forsikring, job og uddannelse, samt aktiviteter, arrangementer, konkurrencer og events</span>
  </label>
</div>
</div> 
<div class="module-sm border-bottom">
  <strong>Vælg betaling</strong>  
  <div class="radio">
  <label>
    <input type="radio" name="creditcard" id="creditcard" value="creditcard" checked>
    Kreditkort
  </label>
</div>
</div>
<div class="module-sm border-bottom text-center">
<a href="#" class="btn btn-sm btn-primary">Gå til betaling <i class="fa fa-caret-right"></i></a>
</div>

<div class="module-sm ">
<div class="terms">
<span class="micro">Fortrydelselsesret: Du har ret til at fortryde denne aftale uden begrundelse inden for 14 dage. Fortrydelsesfristen udløber 14 dage efter den dag du bestilte dit digitale abonnement. <a href="#">Læs mere</a></span>
</div>
</div>



  </form>

  <div class="module-sm bempay-footer">
    Brug for hjælp? Ring til kundeservice på 3375 3707
  </div>
  <p class="micro text-center">Berlingske Media | Pilestræde 34 | DK-1147 København K. | T: (+45) 33 75 33 30 | CVR nummer: 2920 7313 | Købsbetingelser</p>
  </div>

  </div>
  



  
  

    
  </body>
</html>