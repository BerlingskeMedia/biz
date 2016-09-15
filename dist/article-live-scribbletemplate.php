<? require_once("../../dummy/dummy.php") ?>

<?php $imageSize = rand(0,2); ?>

<!DOCTYPE html>

  
  <head>
    <title>Business.dk</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="http://biz.medieimperiet.dk/dist/css/bootstrap.css?ver=17" rel="stylesheet">
     
  </head>
<body>





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


		<div class="row">
			<div class="col-md-8 col-md-push-4">
				<header class="liveblog-header">
					<div class="row">
						<div class="col-sm-12 col-md-3">
							<h1>BusinessLive</h1>
						</div>

						<div class="col-sm-12 col-md-9">
							<p>Vores liveblog hvor vi bringer de seneste nyheder fra de globale 
							markeder, økonomi og store begivenheder indenfor finansverdenen og bla bla bla. 
							Vores team sidder klar ved tasterne på hverdage fra kl. 7 - 23</p>
						</div>
					</div>
					
				</header>
				
				<div id="scribblelive"></div>

				
				
				


			</div><!-- col -->

		<!-- SIDEBAR  -->
		<aside class="col-md-4 col-md-pull-8 hidden-sm hidden-xs">
			<div class="article-sidebar article-content-stream">
				<?php  include('inc/article-content-stream.php'); ?>
			</div><!-- article-sidebar -->
		</aside><!-- col -->


		</div><!-- row -->
	</article>  


      

      
      <?php include('./inc/asset-article-below.php'); ?>

      

    </div>

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>