<? require_once("../../dummy/dummy.php") ?>

<?php $imageSize = 1; ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body class="article-category-businessdirect">
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
      

      
      <article class="col-md-12">
        
        <?php include('inc/article-header-businessdirect.php'); ?>

        
        

        

        <div class="row">
          <div class="col-md-8 col-md-push-2">
          
            <div class="article-content">
            
         
            <p>I nedenstående menu har du mulighed for at administrere din virksomheds profil og administratorer, oprette en liste over dine medarbejdere og kunder samt oprette nyheder.</p>              




<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profil</a></li>
    <li role="presentation"><a href="#employees" aria-controls="employees" role="tab" data-toggle="tab">Nøglemedarbejdere</a></li>
    <li role="presentation"><a href="#clients" aria-controls="clients" role="tab" data-toggle="tab">Kunder</a></li>
    <li role="presentation"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">Brugere</a></li>
    <li role="presentation"><a href="#news" aria-controls="news" role="tab" data-toggle="tab">Opret nyhed</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="profile">





<h2>Stamdata</h2>

<form>
  <div class="form-group">
    <label for="">Titel</label>
    <input type="text " class="form-control input-sm" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Adresse</label>
    <input type="text " class="form-control input-sm" id="" placeholder="">
  </div>


  <div class="row">
    
  <div class="col-sm-3">
  <div class="form-group">
    <label for="">Postnr.</label>
    <input type="text" class="form-control input-sm" placeholder="">
  </div>
  </div>

  <div class="col-sm-9">
  <div class="form-group">
    <label for="">By</label>
    <input type="text" class="form-control input-sm" placeholder=""> 
  </div>
  </div>

  </div>

  <div class="form-group">
    <label for="">CVR</label>
    <input type="text " class="form-control input-sm" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">E-mail</label>
    <input type="email " class="form-control input-sm" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Webadresse</label>
    <input type="url" class="form-control input-sm" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Telefon</label>
    <input type="tel" class="form-control input-sm" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Fax</label>
    <input type="tel" class="form-control input-sm" id="" placeholder="">
  </div>

<div class="form-group">
    <label for="exampleInputFile">Logo</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Logo dimensionerne må max være 512x512 pixels og fylde max 300 kb.</p>
  </div>


<div class="form-group">
    <label for="exampleInputFile">Firmabeskrivelse</label>
  <textarea class="form-control" rows="3">Here comes editor</textarea>
</div>


  


  
  
  <button type="submit" class="btn btn-default btn-sm">Submit</button>
</form>

    </div><!-- tab -->
    <div role="tabpanel" class="tab-pane" id="employees">




<h2>Nøglemedarbejdere</h2>

<div class="module-sm">
<? while (dumb_luck("1-3")): ?>

<div class="row employees">
  
<div class="col-sm-5">
    <strong><? dummy("text@author") ?></strong><br>
    Managing Director, MA
  </div>

  <div class="col-sm-4">
    <label>Mobil:</label> +45 40 30 99 10<br>
    <label>Fastnet:</label> +45 33 12 19 00<br>
    <label>E-mail:</label> <a href="mailto:levin@outcom.dk">levin@outcom.dk</a>
  </div>

  <div class="col-sm-3 text-right">
    <a href="#">Redigér</a>
    <a href="#">Slet</a>
  </div>

</div>

<? endwhile ?>


</div>
<h2>Tilføj nøglemedarbejder</h2>
<form>
  <div class="form-group">
    <label for="">Titel</label>
    <input type="text " class="form-control input-sm" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Medarbejder navn</label>
    <input type="text " class="form-control input-sm" id="" placeholder="">
  </div>


  <div class="row">
    
  <div class="col-sm-4">
    <div class="form-group">
      <label for="">Mobil</label>
      <input type="tel" class="form-control input-sm" placeholder="">
    </div>
  </div>

  <div class="col-sm-4">
    <div class="form-group">
      <label for="">Fastnet</label>
      <input type="tel" class="form-control input-sm" placeholder=""> 
    </div>
  </div>

  <div class="col-sm-4">
    <div class="form-group">
      <label for="">Email</label>
      <input type="email" class="form-control input-sm" placeholder=""> 
    </div>
  </div>

  </div>

  <button type="submit" class="btn btn-default btn-sm">Tilføj</button>
</form>


    </div><!-- tab -->
    <div role="tabpanel" class="tab-pane" id="clients"><h2>Kunder</h2>

<div class="module-sm">
<? while (dumb_luck("1-3")): ?>

<div class="row employees">
  
<div class="col-sm-5">
    <strong><? dummy("text@author") ?></strong><br>
    
  </div>

  <div class="col-sm-4">
    <a href="#">somesite.com</a>
  </div>

  <div class="col-sm-3 text-right">
    <a href="#">Redigér</a>
    <a href="#">Slet</a>
  </div>

</div>

<? endwhile ?>


</div>

<h2>Tilføj kunde</h2>
<form>
  <div class="form-group">
    <label for="">Kundens navn</label>
    <input type="text " class="form-control input-sm" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Url</label>
    <input type="url" class="form-control input-sm" id="" placeholder="">
  </div>



  <button type="submit" class="btn btn-default btn-sm">Tilføj</button>
</form></div><!-- tab -->
    <div role="tabpanel" class="tab-pane" id="users">


<h2>Brugere</h2>

<div class="module-sm">




  <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Navn</th>
            <th>Email</th>
            <th>Redaktør</th>
            <th>Admin</th>
            <th>Fjern</th>
            
          </tr>
        </thead>
        <tbody>
        <? while (dumb_luck("1-3")): ?>
          <tr>
            <th scope="row">Outcom</th>
            <td>brprlwbb@sharklasers.com  </td>
            <td>Nej</td>
            <td>Ja</td>
            <td><a href="#">Slet</a></td>
          </tr>
        <? endwhile ?>          
        </tbody>
      </table>
    </div>







</div>

<form>
  <div class="form-group">
    <label for="">Kundens navn</label>
    <input type="text " class="form-control input-sm" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Url</label>
    <input type="url" class="form-control input-sm" id="" placeholder="">
  </div>



  <button type="submit" class="btn btn-default btn-sm">Invitér</button>
</form>
    </div><!-- tab -->
    <div role="tabpanel" class="tab-pane" id="news">
    <h2>Opret nyhed</h2>

<div class="module-sm">

<form>
  <div class="form-group">
    <label for="">Titel</label>
    <input type="text " class="form-control input-sm" id="" placeholder="">
  </div>

  Nyhedstype
  <div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="radio1" value="option1">
    Virksomhed
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="radio2" value="option2">
    Produkt
  </label>
</div>


<div class="form-group">
<label>Beskrivelse</label>
<textarea class="form-control" rows="3"></textarea>
</div>

<div class="form-group">
    <label for="exampleInputFile">Upload image :</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">(Automatically in the top)</p>
  </div>

  <div class="form-group">
    <label for="exampleInputFile">Upload fil:</label>
    <input type="file" id="exampleInputFile">
    
  </div>

  <div class="form-group">
    <label for="exampleInputFile">Upload fil:</label>
    <input type="file" id="exampleInputFile">
    
  </div>


  <button type="submit" class="btn btn-default btn-sm">Opret</button>
</form>

</div>

  <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Dato</th>
            <th>Titel</th>
            <th>Type</th>
            <th>Status</th>
            <th>Redigér</th>
            
          </tr>
        </thead>
        <tbody>
        <? while (dumb_luck("2-7")): ?>
          <tr>
            <th scope="row"><? dummy("text@date") ?></th>
            <td><a href="article-businessdirect.php"><? dummy("text@headline") ?></a></td>
            <td>C</td>
            <td>Udgivet</td>
            <td><a href="#">Redigér</a></td>
          </tr>
        <? endwhile ?>          
        </tbody>
      </table>
    </div>



    </div><!-- tab -->
  </div>

</div>























































              
             

              
              

              

              
              






             


              
              



            </div><!-- article-content -->
          </div><!-- col -->
          
          <!-- SIDEBAR  -->
          <!-- <aside class="col-md-4 col-md-pull-8">
          <div class="article-sidebar"> -->


          

          
          
            <!-- </div> --><!-- article-sidebar -->
          <!-- </aside> --><!-- col -->


        </div><!-- row -->
      </article>  

      

      


    <section class="deck">
      <div class="col-md-12">
      <? // dummy("ad@biz-features") ?>
      </div>  
    </section>
    </div>

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>