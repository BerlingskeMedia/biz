<? require_once("../../dummy/dummy.php") ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body >
  <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->


  <div class="container">
    
    <div class="row">
      
      <div class="col-md-8 article-content">
      <!-- Inline positioning only for demo purposes! -->
      <!-- Inline positioning only for demo purposes! -->
      <!-- Inline positioning only for demo purposes! -->
      <!-- Inline positioning only for demo purposes! -->
      <!-- Inline positioning only for demo purposes! -->
        <div class="share-highlight" style="position:absolute; top: 100px;   left: 100px;">
            <div class="counter">Del <? dummy("text@number") ?> tegn:</div>
            <button class="close close-highlight"><i class="fa fa-times"></i></button>
            <a href="#" class="icon-social-facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="icon-social-linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="icon-social-twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="icon-social-email"><i class="fa fa-envelope"></i></a>
        </div><!-- share highlight -->

        <? while (dumb_luck("5")): ?>

        <p><? dummy("text@paragraph") ?></p>
      <? endwhile ?>

      </div>

    </div>

  </div>
  

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript">
  // 110% dummy code!
  

  $(function() {

    $('p').on('click', 'a', function(e){
      e.preventDefault();
      $('.share-highlight').fadeIn(100);
    });

    $('.close-highlight').on('click', function() {
      $(this).closest('.share-highlight').fadeOut(50);
    });
  });

</script>

    
  </body>
</html>