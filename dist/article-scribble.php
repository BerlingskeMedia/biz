<? require_once("../../dummy/dummy.php") ?>

<?php $imageSize = rand(0,2); ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body>



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
        

        

        <div class="row">
          <div class="col-md-8 col-md-push-4">
          
            <div class="article-content">
            
            


             

              

            
                                <header class="liveblog-header">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1 class="business-live-title">Business <span>Live</span></h1>
                                        

                                        
                                            <p>Vores liveblog hvor vi bringer de seneste nyheder fra de globale
                                                markeder, økonomi og store begivenheder indenfor finansverdenen og bla bla bla.
                                                Vores team sidder klar ved tasterne på hverdage fra kl. 7 - 23</p>
                                        </div>
                                    </div>

                                </header>
                                <?php 
                                if(isset($_GET["live"])) {
                                    $live = true;
                                  }
                                 ?>
                              <?php if($live) : ?>
                              <div class="liveheader">
                              <span class="livelabel"><i class="fa fa-circle zoomfade"></i> LIVE</span>
                              <span class="timeofday">14.40.03</span>
                              <span class="hostoftheday">
                                <span>Nyhedsvært:</span> <a href="mailto:jst@berlingskemedia.dk">Bent Højgaard Sørensen</a>
                              <img src="http://dummy.medieimperium.dk/cache/6188256_jetc_byline_40x40.jpg" width="" height="" alt="">
                              </span>
                              </div>
                              <?php else: ?>
                              <div class="liveheader">
                                <span class="livelabel livelabel-offline"> OFFLINE</span>
                                Opdateres alle hverdage mellem 7 og 18.
                              </div>
                              <?php endif; ?>

                                <div class="live-content" id="live-content">

                                <ul id="RecentPostsWidget0" class="live-blog"><li id="367521709" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div>I'm supposed to be sticky!!</div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 14.07.28</div></li><li id="367566086" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><dl id="Poll110826"><dt>Hvad synes du om den nye iPhone?</dt><dd id="Answer409211"><a class="Vote" onclick="RecentPosts.GetInstance(0).VoteOnPoll(110826,409211)"><input type="radio"></a><span>Fed</span></dd><dd id="Answer409212"><a class="Vote" onclick="RecentPosts.GetInstance(0).VoteOnPoll(110826,409212)"><input type="radio"></a><span>Knapt så fed...</span></dd></dl></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 14.23.53</div></li><li id="367562349" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><strong>Link til CNN</strong></div><div><div class="scrbbl-sitePreview"><div class="Media SL_Top LinkImage" contenteditable="false"><img alt="" src="https://images.scribblelive.com/2016/9/20/127004e8-3cc9-4fe3-abb5-990eed8d210f.jpg"></div><div class="scrbbl-sitePreview-inner"><h3><a href="http://www.cnn.com/2016/09/19/middleeast/syria-aid-convoys-attacked/index.html">Syria: UN suspends aid delivery after convoy, warehouse attacked</a></h3><span class="LinkSiteName">CNN</span><span class="LinkDescription">An aid convoy carrying life-saving supplies to 78,000 people has been attacked near the Syrian city of Aleppo Monday, according to the United Nations.</span></div></div></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 14.20.48</div></li><li id="367561901" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><dl id="Poll110824"><dt>Skal du have den nye iPhone?</dt><dd id="Answer409204"><a class="Vote" onclick="RecentPosts.GetInstance(0).VoteOnPoll(110824,409204)"><input type="radio"></a><span>Ja</span></dd><dd id="Answer409205"><a class="Vote" onclick="RecentPosts.GetInstance(0).VoteOnPoll(110824,409205)"><input type="radio"></a><span>Nej</span></dd><dd id="Answer409206"><a class="Vote" onclick="RecentPosts.GetInstance(0).VoteOnPoll(110824,409206)"><input type="radio"></a><span>Det må du spørge min chef om</span></dd></dl></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 14.20.18</div></li><li id="367557836" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><p><a href="http://www.business.dk/oekonomi/stjerne-ivaerksaettere-vil-give-nye-haab-gode-raad-og-penge">»Vi har alle prøvet turen fra lille startup i et kælderlokale eller loftsrum. Vi har fejret succeserne og grædt over fejl og forkerte beslutninger.«</a></p><figure><figcaption><p>KLAUS NYENGAARD, MEDSTIFTER AF DET NYE INVESTERINGSKRAFTVÆRK NORDIC MAKERS.</p></figcaption></figure></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 14.16.44</div></li><li id="367554514" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><blockquote>
            <div>Det går ufatteligt godt</div></blockquote>

            <div>Karsten Rasmussen, Group CFO</div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 14.14.20</div></li><li id="367554018" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><span style="background-color:#A52A2A;">Click to add content.</span>&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo, massa eu sodales suscipit, nisi magna ornare risus, vel tempus odio enim venenatis felis. Nunc maximus ipsum vitae mauris dictum, eget eleifend magna sodales. Nunc et posuere erat. Praesent sapien augue, aliquet sit amet congue vitae, feugiat ac ligula. Praesent sed placerat libero. Aliquam erat volutpat. Nunc in lectus eu eros malesuada porttitor.</div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 14.13.10</div></li><li id="367553183" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><div class="row two-col-left"><div class="col-md-3 col-sidebar"><p>&nbsp;<span class="click-to-add">Click to add content. </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo, massa eu sodales suscipit, nisi magna ornare risus, vel tempus odio enim venenatis felis. Nunc maximus ipsum vitae mauris dictum, eget eleifend magna</p></div><div class="col-md-9 col-main"><p>&nbsp;<span class="click-to-add">Click to add content. </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo, massa eu sodales suscipit, nisi magna ornare risus, vel tempus odio enim venenatis felis. Nunc maximus ipsum vitae mauris dictum, eget eleifend magna sodales. Nunc et posuere erat. Praesent sapien augue, aliquet sit amet congue vitae, feugiat ac ligula. Praesent sed placerat libero. Aliquam erat volutpat. Nunc in lectus eu eros malesuada porttitor.</p></div></div><div>&nbsp;</div></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 14.12.20</div></li><li id="367547638" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div>Test with an image
            <figure><img alt="" src="https://images.scribblelive.com/2016/9/20/a4365fb1-2e68-4dc5-9f28-b19f945ac73b.jpg">
            <figcaption>Test with an image</figcaption></figure><div>&nbsp;</div></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 14.07.47</div></li><li id="367546199" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content">The United Nations is suspending its aid operations in Syria after a deadly attack on a convoy and warehouse carrying life-saving supplies in rural Aleppo on Monday night, a UN spokesperson said, leaving tens of thousands of people without desperately needed food</div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 14.05.29</div></li><li id="367542986" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div>Test med billede</div><div><figure><img alt="" src="https://images.scribblelive.com/2016/9/20/f46d7875-1198-47ac-9331-0608417aeaf1.jpg"><figcaption>Lauritz-com aktien tog sig en gevaldig flyvetur i dag</figcaption></figure><div>&nbsp;</div></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 14.02.33</div></li><li id="367540538" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content">Her kommer en post</div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 14.00.25</div></li><li id="367492283" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content">I'm a post right after a sticky post</div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 13.17.36</div></li><li id="367492228" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><div><strong>Venstre ved du altid er klar på et Tweet</strong></div><blockquote class="twitter-tweet"><a href="https://twitter.com/hansersej/status/778189150528868352">&nbsp;</a></blockquote></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 13.17.31</div></li><li id="367491396" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content">I'm a sticky post... But how?</div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 13.18.34</div></li><li id="367484299" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><div><div><strong>Venstre ved du altid er klar på et Tweet</strong></div><blockquote class="twitter-tweet"><a href="https://twitter.com/hansersej/status/778189150528868352">&nbsp;</a></blockquote></div></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 13.09.59</div></li><li id="367482301" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content">Det var hvad vi kunne nå i dag - sorry hvis der var enkelte, der ikke fik svar. Jeg er tilbage med mere F1-chat efter fredags-træningen i Malaysia - det er jo den 30. september, hvor en masse optioner udløber. Spændende eller hvad? Bedste hilsner fra Singapore - Peter N</div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 13.08.09</div></li><li id="367480651" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><div>Tests af Instagram indlæg</div><div>&nbsp;</div><div class="scrbbl-post-embed" data-url="https://www.instagram.com/p/BKkz30oBNfP/"></div></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 13.06.53</div></li><li id="367479539" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content">Jeg er et indlæg med et flag</div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 13.05.50</div></li><li id="367477766" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content">Dette er et test indlæg</div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 13.04.27</div></li><li id="367471740" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><strong>Link til artikel fra Berlingske</strong></div><div><div class="scrbbl-sitePreview"><div class="Media SL_Top LinkImage" contenteditable="false"><img alt="" src="https://images.scribblelive.com/2016/9/20/130c6b7c-3a01-4061-83ba-f216f24d1ffc.jpeg"></div><div class="scrbbl-sitePreview-inner"><h3><a href="http://www.b.dk/globalt/naar-en-dansk-stationsby-bliver-del-af-konflikten-i-tyrkiet">Når en dansk stationsby bliver del af konflikten i Tyrkiet</a></h3><span class="LinkSiteName">www.b.dk</span><span class="LinkDescription">Efterdønningerne af det tyrkiske militærkup er nået til Danmark. Nærmere bestemt til den lille stationsby Avedøre i udkanten af København.</span></div></div></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 12.59.01</div></li><li id="367453556" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><div><strong>Test af Facebook post</strong></div><div>&nbsp;</div><div class="fb-post fb_iframe_widget" data-href="https://www.facebook.com/1470588026559388/posts/1775395866078601" data-width="350"></div></div><div>&nbsp;</div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 12.42.03</div></li><li id="367429976" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><strong>Dette er en test af Twitter</strong>&nbsp;</div><div><blockquote class="twitter-tweet"><a href="https://twitter.com/tv2politik/status/778176545034739712">&nbsp;</a></blockquote></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 12.19.57</div></li><li id="367411929" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><strong>Her er en artikel fra CNN</strong></div><div><div class="scrbbl-sitePreview"><div class="Media SL_Top LinkImage" contenteditable="false"><img alt="" src="https://images.scribblelive.com/2016/9/20/d9d8793f-0b97-40ab-b170-bd98bca0e4c9.jpg"></div><div class="scrbbl-sitePreview-inner"><h3><a href="http://www.cnn.com/2016/09/19/middleeast/syria-aid-convoys-attacked/index.html">Syria: UN suspends aid delivery after convoy, warehouse attacked</a></h3><span class="LinkSiteName">CNN</span><span class="LinkDescription">An aid convoy carrying life-saving aid to 78,000 people has been attacked near the Syrian city of Aleppo Monday, according to the United Nations.</span></div></div></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 12.02.43</div></li><li id="367411017" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><strong>Her er en artikel fra Politiken</strong></div><div><div class="scrbbl-sitePreview"><div class="Media SL_Top LinkImage" contenteditable="false"><img alt="" src="https://images.scribblelive.com/2016/9/20/890552a1-3b00-4951-ad91-999fa8f7f7aa.jpg"></div><div class="scrbbl-sitePreview-inner"><h3><a href="http://politiken.dk/udland/fokus_int/borgerkrigenisyrien/ECE3391416/fn-suspender-noedhjaelpstransporter-til-syrien/">FN suspender n�dhj�lpstransporter til Syrien</a></h3><span class="LinkDescription">USA har givet Syriens regering og Rusland skylden for mandagens angreb p� en n�dhj�lpskolonne.</span></div></div></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 12.01.50</div></li><li id="367384146" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div>Artikel fra Business.dk</div><div><div class="scrbbl-sitePreview">
            <div class="Media SL_Top LinkImage" contenteditable="false"><img alt="" src="https://images.scribblelive.com/2016/9/20/dbd2e7ff-6318-48de-b80c-39cd66d73caa.jpg"></div><div class="scrbbl-sitePreview-inner">
            <h3><a href="http://www.business.dk/content/item/412668">Boligopsvinget har bredt sig til hele landet</a></h3><span class="LinkSiteName">Business portalen www.business.dk</span><span class="LinkDescription">Det er ikke kun i større byer, at boligpriserne rykker opad. Tal fra Realkreditrådet viser stigninger overalt.</span></div></div></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 12.12.43</div></li><li id="367383413" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content">Test&nbsp;af&nbsp;tekst indlæg</div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 12.07.59</div></li><li id="367340868" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><strong>Nu er den gal igen</strong></div><div>Dette er en artikel fra DR</div><div><div class="scrbbl-sitePreview"><div class="Media SL_Top LinkImage" contenteditable="false"><strong><img alt="" src="http://asset.dr.dk/ImageScaler/?file=%2Fimages%2Fcrop%2F2016%2F09%2F20%2F1474354983_scanpix-20160920-084147-4.jpg&amp;server=www.dr.dk"></strong></div><div class="scrbbl-sitePreview-inner"><h3><strong><a href="http://www.dr.dk/nyheder/udland/noedhjaelpsorganisationer-raaber-op-der-er-ingen-respekt-os-i-krigszoner-laengere">Nødhjælpsorganisationer råber op: Der er ingen respekt for os i krigszoner længere</a></strong></h3><strong><span class="LinkSiteName">DR</span><span class="LinkDescription">Senest blev en konvoj med nødhjælp angrebet i Syrien i går.</span></strong></div></div></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 10.54.48</div></li><li id="367327406" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div>Danmarks vækstrater er helt i bund</div><div><div class="scrbbl-sitePreview"><div class="Media SL_Top LinkImage" contenteditable="false"><img alt="" src="https://images.scribblelive.com/2016/9/20/844d2b78-9eed-4010-a4b7-5e12fff135ab.jpg"></div><div class="scrbbl-sitePreview-inner"><h3><a href="http://www.business.dk/content/item/412631">Danmarks hjertestarter til kriseramte virksomheder rykker ud i Europa</a></h3><span class="LinkSiteName">Business portalen www.business.dk</span><span class="LinkDescription">Danmarks livline og rådgivningsinstans til erhvervsdrivende i krise, Early Warning, er blevet valgt til i de kommende år at stå i spidsen for at opbygge et europæisk korps af frivillige, der skal redde virksomheder på randen af konkurs.</span></div></div></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 10.41.39</div></li><li id="367324471" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><div class="scrbbl-sitePreview"><div class="Media SL_Top LinkImage" contenteditable="false"><img alt="" src="http://asset.dr.dk/ImageScaler/?file=%2Fimages%2Fcrop%2F2016%2F09%2F19%2F1474313598_xborg_elleman_00163508.jpeg&amp;server=www.dr.dk"></div><div class="scrbbl-sitePreview-inner"><h3><a href="http://www.dr.dk/nyheder/indland/stoejsendere-skal-stoppe-fangers-brug-af-ulovlige-mobiltelefoner">Støjsendere skal stoppe fangers brug af ulovlige mobiltelefoner</a></h3><div><span class="LinkSiteName">DR</span></div><div><span class="LinkDescription">Ekspertgruppe anbefaler forsøg med radiosendere - jammere i fængslerne.</span></div></div></div></div><div>- Det er vigtigt, at fangerne ikke har adgang til mobiltelefoner, da det ødelægger ethvert opklaringsarbejde. Derfor er det vigtigt, at vi nu får startet forsøg med at bruge jamming. Sådan lyder det fra social- og indenrigsminister Karen Ellemann (V).</div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 10.38.47</div></li><li id="367323614" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><h1>Støjsendere skal stoppe fangers brug af ulovlige mobiltelefoner</h1></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 10.38.01</div></li><li id="360875701" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><strong>This one crosses the "10 posts" boundary. </strong></div><div>Dette er en meget kort opdatering</div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 13.03.22</div></li><li id="360874209" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div>Another one with some <a href="https://www.youtube.com/watch?v=JHGkaShoyNs">video</a>. Hopefully.</div><div>&nbsp;</div></div><div class="Meta">by Jesper Dalsten on 16/9/2016 at 14.06.28</div></li><li id="360869265" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><strong>Need to reopen this and post something again.</strong></div><div>With some cool picture.</div><div><img alt="" src="https://images.scribblelive.com/2016/9/16/a557d936-53bd-43e3-8e2e-42b086c1313f.jpg">
            <div>&nbsp;</div></div></div><div class="Meta">by Jesper Dalsten on 20/9/2016 at 13.03.36</div></li><li id="360536606" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content"><div><div><strong>I dag er det sidste chance</strong></div><div>&nbsp;</div><div class="fb-post fb_iframe_widget" data-href="https://www.facebook.com/12787473132/posts/10153903625988133" data-width="350"></div></div></div><div class="Meta">by Administrator on 16/9/2016 at 08.54.16</div></li><li id="360535640" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content"><div><div><strong>Hans Nielsen er uenig med Venstre</strong></div><div>&nbsp;</div><blockquote class="twitter-tweet"><a href="https://twitter.com/throennow/status/776674839918702592">&nbsp;</a></blockquote></div></div><div class="Meta">by Administrator on 16/9/2016 at 08.53.17</div></li><li id="360535023" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content"><div><blockquote class="twitter-tweet"><a href="https://twitter.com/kjellerupbiz/status/776674933149761536">&nbsp;</a></blockquote></div></div><div class="Meta">by Administrator on 16/9/2016 at 08.52.41</div></li><li id="360518225" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content">asdfasdasd</div><div class="Meta">by Administrator on 16/9/2016 at 08.35.59</div></li><li id="360517637" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content">hej igen</div><div class="Meta">by Administrator on 16/9/2016 at 08.35.35</div></li><li id="360517364" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content">Hej</div><div class="Meta">by Administrator on 16/9/2016 at 08.35.18</div></li><li id="360515978" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content">Heste post</div><div class="Meta">by Administrator on 16/9/2016 at 08.33.57</div></li><li id="360515056" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content">Dette er et indlæg</div><div class="Meta">by Administrator on 16/9/2016 at 08.33.03</div></li><li id="360513674" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content">Hej med dig</div><div class="Meta">by Administrator on 16/9/2016 at 08.31.34</div></li><li id="360510241" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content">Nyt indlæg</div><div class="Meta">by Administrator on 16/9/2016 at 08.28.31</div></li><li id="360509592" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content">Dette er en test</div><div class="Meta">by Administrator on 16/9/2016 at 08.27.49</div></li><li id="359336973" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content"><div><div>Dette er et Facebook indlæg</div><div>&nbsp;</div><div class="fb-post fb_iframe_widget" data-href="https://www.facebook.com/annikalangvadfanpage/photos/a.651291735024084.1073741866.200617996758129/694910777328846/?type=3" data-width="350"></div></div></div><div class="Meta">by Administrator on 15/9/2016 at 15.52.02</div></li><li id="359334836" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content"><div><div>Vi bringer her et tweet</div><div>&nbsp;</div><blockquote class="twitter-tweet"><a href="https://twitter.com/ProvoDk/status/776417411801067520">&nbsp;</a></blockquote></div></div><div class="Meta">by Administrator on 15/9/2016 at 15.50.19</div></li><li id="359291726" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content"><div>Dette er en test</div><div>&nbsp;</div><div>Dette er en test</div><div>&nbsp;</div></div><div class="Meta">by Administrator on 15/9/2016 at 15.14.31</div></li><li id="359154925" class="live-item-text"><img src="https://avatars.scribblelive.com/2016/9/20/ef697ff0-74ca-4fb6-97d9-8c976efe4975.png" class=""><div class="Content"><div><div class="scrbbl-sitePreview"><div class="Media SL_Top LinkImage" contenteditable="false"><img alt="" src="https://images.scribblelive.com/2016/9/15/d7146cec-1d51-44d4-b127-12ed1b123d68.jpeg"></div><div class="scrbbl-sitePreview-inner"><h3><a href="http://www.b.dk/nationalt/adam-og-eva-soeger">Studiejob? Swingerklub søger søde piger, der kan sige nej til sex</a></h3><span class="LinkSiteName">www.b.dk</span><span class="LinkDescription">Swingerklubben Adam &amp; Eva søger på jobportalen Ofir.dk søde, studerende piger til at varte medlemmerne op. Et opslag, der fortæller sin egen historie om danskernes sexliv.</span></div></div></div></div><div class="Meta">by Jesper Dalsten on 15/9/2016 at 13.15.50</div></li><li id="359151642" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content"><div><div class="scrbbl-sitePreview"><div class="Media SL_Top LinkImage" contenteditable="false"><img alt="" src="https://images.scribblelive.com/2016/9/15/7b2bf713-9c63-48b3-a7f7-9f13f5d96a8f.jpg"></div><div class="scrbbl-sitePreview-inner"><h3><a href="http://www.business.dk/content/item/412441">Asiatisk begmand til Airbus: Luftfartsgigant dropper superjumboen</a></h3><span class="LinkSiteName">Business portalen www.business.dk</span><span class="LinkDescription">Singapore Airlines, der var den første aftager til det gigantiske doubledækker 380er fly fra Airbus, vil ikke forlænge en lejeaftale af flyet. Dermed lurer afslutningen af en gylden epoke for de ikoniske gigafly. </span></div></div></div></div><div class="Meta">by Administrator on 15/9/2016 at 13.12.42</div></li><li id="359150660" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content">Bo har fattet det!</div><div class="Meta">by Administrator on 15/9/2016 at 13.11.45</div></li><li id="359148562" class="live-item-text"><img src="https://s3.amazonaws.com/avatars.scribblelive.com/2012/5/23/497ff2d0-8195-4cf5-802b-71e6b13c496f.png" class=""><div class="Content">Test</div><div class="Meta">by Administrator on 15/9/2016 at 13.10.04</div></li></ul></div>
                                <script type="text/javascript">
                                    liveblogRefreshInterval = 5000;
                                </script>


                            
              
              
              
              


            </div><!-- article-content -->
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