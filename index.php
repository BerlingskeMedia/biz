

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk - Project Central</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="dist/css/bootstrap.css?ver=456" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     
  </head>
  <body>
  <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

<style type="text/css">
body {
  background: #fff;
}
ul {
  list-style: none;
  padding-left: 0;
  font-size: 15px;
}
li ul {
  padding-left: 20px;
  list-style: disc;

}
  a {
    min-width: 200px;
  }
  date {
    position: absolute;
    left: 250px;
    font-size: 12px;
    display: none;
  }

  li:after {
    color: rgba(0,0,0,.4);
    display: inline-block;
    padding-left: 10px;
    font-style: italic;
    font-size: 12px;
    position: absolute;
    left: 300px;
  }
  li.nuke:after {
    content: 'Deprecated...'; 
  } 

  li a {
    padding: 0 4px;
    text-shadow: 1px 1px 0 rgba(255,255,255,.4);
    -webkit-transition: all .1s ease;
    -moz-transition: all .1s ease;
    transition: all .1s ease;
  }
  /* Not started */
  li.a > a {
    background: rgba(0,0,0,.05);
    color: #333;  
  }
  li.a > a:hover {
    background: rgba(0,0,0,.1);
    
  }
  li.a:after  {
    content: 'Not started'; 
  }
  /* In pregress */
  li.nuke > a {
     text-decoration: line-through;
      color: #666;
      cursor: default;
  }
  /* In pregress */
  li.b  > a {
    background: rgba(255,204,51,.3);
    color: #663300;
  }
  li.b  > a:hover {
    background: rgba(255,204,51,.5);
  }
  li.b:after  {
    content: 'In progress'; 
  }
  /* Done - needs approval */
  li.c  >  a {
    background: rgba(255,153,51,.5);
    color: #663300;
  }
  li.c  >  a:hover {
    background: rgba(255,153,51,.7);
  }
  li.c:after  {
    content: 'Waiting for approval'; 
  }

  /* Ready for development */
  li.d  > a {
    background: rgba(172,211,115,.5);
    color: #336633;
  }
  li.d  > a:hover {
    background: rgba(172,211,115,.7);
    
  }
  li.d:after  {
    content: 'Approved and ready'; 
  }
</style>
  
  <div class="container">
    

      
    

    <div class="row">

    
      <div class="col-md-12 text-center module">
      <br><br>
      <a href="overview.php" class="logo">
          Berlingske Business
        </a>    
      </div>
      <div class="col-md-6">
        

        <h3>Page templates</h3>

        <h4>Generel</h4>

        <ul class="overview">
          <li class="d"><a href="./dist/index.php">Frontpage</a> <date>Feb. 6th</date></li>
          <li class="d"><a href="./dist/section.php">Section</a> <date>Feb. 5th</date></li>
          <li class="d"><a href="./dist/article.php">Article</a> </li>
          <li class="d"><a href="./dist/article-footer.php">Article footer</a><date>Feb. 5th</date></li>
          <li class="d"><a href="./dist/assets-article-contentstream.php">Content Stream</a></li>
          <li class="a"><a href="#">Article - Longreads</a></li>
          <li class="d"><a href="./dist/topic.php">Topic page</a><date>Feb. 6th</date></li>
          <li class="d"><a href="./dist/article-large.php">Article - Large</a><date>Feb. 6th</date></li>
          <li class="d"><a href="./dist/article-advetorial.php">Article - Advetorial</a><date>Feb. 6th</date></li>
          <li class="d"><a href="./dist/page-profile.php">User profile</a> <date>Feb. 12th</date></li>
          <li class="d"><a href="./dist/staff.php">Staff - overview</a><date>Feb. 3rd</date></li>
          <li class="d"><a href="./dist/author.php">Staff - Author</a><date>Feb. 10th</date></li>
          <li class="a"><a href="#">Header</a> </li>
          <li class="d"><a href="./dist/assets-footer.php">Footer</a> <date>Feb. 20th</date></li>
          <li class="c"><a href="./dist/assets-paywall.php">Paywall</a> <date>Feb. 20th</date></li>
          <li class="a"><a href="#">Bempay</a> </li>
          <li class="d"><a href="/dist/404.php">404</a> <date>Feb. 12th</date></li>
          <li class="d"><a href="/dist/search-result.php">Search</a> <date>Feb. 12th</date></li>
          <li class="d"><a href="/dist/news-overview.php">News overview</a> <date>Feb. 12th</date></li>
          <li class="d"><a href="./dist/section-video.php">Business TV - Section</a><date>Feb. 14th</date></li>
          <li class="b"><a href="./dist/article-video.php">Business TV - Article</a><date>Feb. 14th</date></li>
          <li class="a"><a href="#">Jobindex overview</a></li>
          <li class="d"><a href="./dist/section-askbusiness.php">"Ask Business"</a></li>
          <li class="d"><a href="./dist/section-events.php">Events</a> <date>Feb. 14th</date></li>
          <li class="d"><a href="./dist/magazine.php">Business Magazine</a></li>
          <li class="d"><a href="./dist/section-galleries.php">Image galleries - Section</a></li>
          <li class="d"><a href="./dist/gallery-bond.php">Image galleries - BOND version</a></li>
          <li class="d"><a href="./dist/gallery-overlay.php">Image galleries - Symfony</a></li>
          <li class="d"><a href="./dist/gallery-overlay-finale.php">Image galleries - Symfony - final slide</a></li>
          <li class="d"><a href="./dist/assets-cookiewarning.php">Cookiewarning</a></li>
          <li class="a"><a href="#">Article archive</a></li>

        </ul>

        <h4>Business <span class="logo-premium"><span>Premium</span></span></h4>
        <ul>
        <li class="d"><a href="/dist/frontpage-premium.php">Frontpage</a>
        <li class="d"><a href="/dist/section-premium.php">Section</a>
        <li class="d"><a href="/dist/article-premium.php">Article</a>
        <li class="d"><a href="/dist/page-text-premium-1.php">Help page 1</a></li>
        <li class="d"><a href="/dist/page-text-premium-2.php">Help page 2</a></li>
        <li class="d"><a href="/dist/page-text-premium-3.php">Help page 3</a></li>
        <li class="d"><a href="/dist/page-text-premium-4.php">Help page 4</a></li>
        <li class="nuke"><a href="#">My premium articles</a></li>
        </ul>
        <h4>BrandView</h4>
        <ul>
        <li class="d"><a href="/dist/article-brandview.php">Article</a>
        </ul>

        <h4>BusinessDirect</h4>
        <ul>
        <li class="d"><a href="dist/frontpage-businessdirect.php">Frontpage</a>
        <li class="d"><a href="dist/article-businessdirect.php">Press announcment (article)</a>
        <li class="d"><a href="dist/profile-businessdirect.php">Company profile </a>
        <li class="d"><a href="dist/section-businessdirect.php">Latest press releases</a>
        <li class="nuke"><a href="#">Text pages ("What is Business Direct")</a>
        <li class="d"><a href="dist/backend-businessdirect.php">Backend</a>
        </ul>
        <h3>Toolbox</h3>

        <ul class="overview">
          <li><a href="/dist/assets-tools.php">Assets</a></li>
          <li><a href="/dist/assets-teasers.php">Lists and teasers</a></li>
          <li><a href="/dist/assets-article.php">Article assets</a></li>
        </ul>

        
      </div>
    
<aside class="col-md-6">
<h3>People</h3>
    <p><a href="mailto:mih@berlingskemdia.dk">Mikael Hjorth</a> - 25 45 63 49</p>
    <p><a href="mailto:xjewa@berlingskemdia.dk">Jens Wartenberg</a> - 29 86 10 10</p>
    <p><a href="mailto:tvf@berlingskemdia.dk">Troels Frederiksen</a> - 27 22 20 80</p>
    <p><a href="mailto:bsk@berlingskemdia.dk">Bo Skakke</a> - 20 61 67 68</p>
    </aside>


    </div>

    

  

  </div><!-- container -->
    



  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>

<script src="dist/js/app.js?ver=587"></script>

    
  </body>
</html>