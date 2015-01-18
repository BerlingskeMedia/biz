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
        <button type="button" class="btn btn-primary btn-sm">Log ind</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<header class="site-header">
<div class="header-wrapper">
  <div class="container">
    <div class="row">
    
    <div class="col-sm-12">
      <nav class="super-header">
        <ul>
          <li><a href="#">Berlingske.dk</a></li>
          <li><a href="#">Politiko.dk</a></li>
        </ul>
        <ul class="right-nav">
          <li><a href="http://www.berlingskemedia.dk/cookie-og-privatlivspolitik/" target="_blank" class="sosume">Privatlivspolitik</a></li>
          <li><a href="#">Annoncør</a></li>
          <li><a href="#">Kontakt</a></li>
          <li><a href="#">Køb abonnement</a></li>
        </ul>
      </nav>
    </div><!-- col -->
    
      <div class="col-sm-6">
        <a href="overview.php" class="logo">
          Berlingske Business
        </a>    
      </div>
      <div class="col-sm-6">
        <div class="text-right">
        <div class="tools thanks-mic-dot-com">
          <div class="tool-likeus">
            <a href="https://www.facebook.com/berlingskebusiness" target="_blank" class="header-tool-icon"><i class="fa fa-facebook"></i></a>
            <div class="social-iframe">
              <!-- Remember to insert button with correct App id -->
              <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fberlingskebusiness&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;appId=362425483926972" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe>
            </div>
          </div>
          <div class="tool-likeus">
            <a href="https://twitter.com/businessdk" target="_blank" class="header-tool-icon"><i class="fa fa-twitter"></i></a>
            <div class="social-iframe">
            <a href="https://twitter.com/businessdk" class="twitter-follow-button" data-show-count="false">Follow @businessdk</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
          </div>
          <a href="#" class="header-tool-icon toggle-search"><i class="fa fa-search"></i></a>
          <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-login">Log ind</a>  
        </div>
          
        </div>
      </div>
    </div>
  </div> 


  <div class="site-menu">
  <div class="container">
  <div class="row">
  <div class="col-md-12">
    <ul>
      <? while (dumb_luck("7")): ?><li><a href="#" title="Title"><? dummy("text@item") ?></a></li><? endwhile ?>
      <li class="pull-right"><a href="#" title="Title">Seneste nyt</a></li>
    </ul>
    </div>
    </div>
  </div>
  </div>
</div><!-- header-wrapper -->

<div class="global-search">
  <div class="container">
    <div  class="toggle-search fa fa-times"></div>
    <form action="search.php" method="get">
      <input type="search" class="nav-search-input" placeholder="Indtast søgeord" name="q" autocomplete="off" value="" accesskey="s" tabindex="1" size="65">
      <button type="submit" tabindex="2" class="nav-search-query-btn fa fa-search"></button>
    </form>
  </div>
</div>
</header>



