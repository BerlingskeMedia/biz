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

<section class="deck">
  <div class="row">
    <div class="col-md-12">
      <section class="deck deck-2-col">
<h2>Deck with 2 cols</h2>  
<p><code>.deck .deck-2-col</code> and <code>.deck-content</code> used in combination</p>
  <h4>Example</h4>
  <div class="deck-content">
    <p><? dummy("text@paragraph") ?></p>
    <p><a href="#">Read more</a></p>
  </div>
</section>
    </div>    
  </div>
</section>



<section class="deck">
  <div class="row">
    <div class="col-md-12">
      <section class="deck deck-2-col">
<h2>Responsive menu</h2>  
<p>Use <code>.nav-responsive</code> on containing <code>nav</code> element</p>
  <h4>Example</h4>
  

  <nav class="nav-responsive ">
  <a href="#" class="nav-toggle btn btn-primary">Menu <i class="fa fa-caret-down"></i></a>
  <ul>
    <? while (dumb_luck("7")): ?>
  <li><a href="page-text-premium-1.php"><? dummy("text@item") ?></a> 
  <? endwhile ?>
    
  </ul>
  
  </nav>

<h3>Responsive menu right aligned</h3>  
<p>Use <code>.nav-responsive .nav-responsive-right</code> on containing <code>nav</code> element</p>
<h4>Example</h4>
  <nav class="nav-responsive nav-responsive-right">
  <a href="#" class="nav-toggle btn btn-primary">Menu <i class="fa fa-caret-down"></i></a>
  <ul>
    <? while (dumb_luck("7")): ?>
  <li><a href="page-text-premium-1.php"><? dummy("text@item") ?></a> 
  <? endwhile ?>
    
  </ul>
  
  </nav>


</section>


<section class="module-sm">
<h2>Email signup</h2>
          <form class="form-signup">
            <h1 class="section-header-sm">
              Business Direct newsletter
            </h1>
            <p class="small"><? dummy("text@teaser") ?></p>
            <div class="form-group form-oneline ">
              
              <input type="email" id="signup" class="form-control input-sm" placeholder="Indtast din email">
              <button class="btn btn-sm btn-primary btn-sm ">Sign up</button>
            </div>
            <div class="checkbox">

              <label for="permission" class="label-small">
                <input type="checkbox" checked="" id="permission"> Receive occasional updates and special offers from Business.dk
              </label>
            </div>
          </form>
          </section>


    </div>    
  </div>
</section>

 

  </div><!-- container -->
    


    






  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>