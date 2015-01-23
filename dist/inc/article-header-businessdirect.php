<!-- 
**********************************************
Att. Bond dev: The header should be a custom content unit :-) 
**********************************************
-->
<header class="header-sponsor-article header-businessdirect toggle-container">
   <a href="frontpage-businessdirect.php" class="logo-businessdirect">BusinessDirect</a>
 

<? if (dumb_luck("50%")): ?>

<nav class="nav-responsive nav-responsive-right">
  <a href="#" class="nav-toggle btn btn-primary">Menu <i class="fa fa-caret-down"></i></a>
  <ul>
    <li><a href="#">Redigér profil</a></li>
    <li><a href="#">Opret nyhed</a></li>
    <li><a href="#">Om Business Direct</a></li>
   </ul>
  </nav>

<? else: ?>
<nav class="nav-responsive nav-responsive-right">
  <a href="#" class="nav-toggle btn btn-primary">Menu <i class="fa fa-caret-down"></i></a>
  <ul>
    <li><a href="#" class="a-pink toggle-btn" >Om Business Direct</a></li>
    <li><a href="#" class="a-pink" data-toggle="modal" data-target="#modal-login">Log ind</a></li>
   </ul>
  </nav>
<? endif ?>

  <div class="toggle-content">
    <p>Business Direct er Berlingskes presseservice, hvor virksomheder kan offentliggøre pressemeddelelser på business.dk og i Berlingske Business.</p>
    <p>Har du spørgsmål om Business Direct kan du kontakte Jesper Husen på tlf. 27 400 200 eller <a href="mailto:info@businessdirect.dk">info@businessdirect.dk</a> eller besøge vores hjemmeside: <a href="#">www.businessdirect.dk</a>.</p>    
  </div>

</header>
