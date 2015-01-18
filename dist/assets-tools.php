<? require_once("../../dummy/dummy.php") ?>
<!DOCTYPE html>
<html lang="da">
  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body>
  <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->


  <?php // include("./inc/header.php"); ?>



  <div class="container">
<section class="deck">
  <div class="row">
    <div class="col-md-6">
    <h1>Top and bottom margin</h1>
    <p>Several classes can be used to apply bottom and top margin to elements.</p>
    <p><code>.module</code> Applies margin-bottom: 50px</p>
    <p><code>.module-sm</code> Applies margin-bottom: 25px</p>
    <p><code>.module-xs</code> Applies margin-bottom: 15px</p>
    <p><code>.module-top</code> Applies margin-top: 25px</p>
    <p><code>.module-top-lg</code> Applies margin-top: 60px</p>

    <h4>Example:</h4>

      <div class="example-element module">Element with <code>.module</code></div>
      <div class="example-element module-sm">Element with <code>.module-sm</code></div>
      <div class="example-element module-xs">Element with <code>.module-xs</code></div>
      <div class="example-element ">Neutral element</div>
      <div class="example-element module-top">Element with <code>.module-top</code></div>
      <div class="example-element module-top-lg">Element with <code>.module-top-lg</code></div>

    </div>
  </div>
</section>

<section class="deck">
  <div class="row">
    <div class="col-md-6">
    <h1>Toggle box</h1>
    <p>The container element that wraps up the whole content must have the class <code>.toggle-container</code>. The link  that trigger the toggle function must have the <code>.toggle-btn</code> class. The hidden content to appear must be inside a <code>.toggle-content</code></p>

    <h4>Example:</h4>

      <?php include("inc/asset-article-letterbox.php"); ?>
    </div>
  </div>
</section>

 

  </div><!-- container -->
    






  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>