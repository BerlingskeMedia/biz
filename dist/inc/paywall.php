

<?php if($paywall == 'soft'): ?>


    <section class="paywall paywall-soft" rel="noindex">
        
            <div class="paywall-inner ">
                <h2>God fornøjelse</h2>
                <p class="module-lg">
                    Denne artikel er normalt kun for abonnenter, men i dag kan du læse den gratis. Få adgang til alle artikler med et digitalt abonnement. 
                </p>
                
                <div class="module-xs">
                    
                    	
                        
                        <button class="btn btn-live btn-md  btn-paywall btn-paywall-2 ">
                        	Få den første måned gratis nu <i class="fa fa-angle-right"></i>
                        </button>
                    
					
                    

                </div>
                        
                                                    
				<p class="small">
                    Allerede abonnent?
                                                    <a href="#" class="btn-topmenu-login toggle-login link-gray" data-href="" data-toggle="modal" data-target="#modal-login">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp;Klik her
                    </a>
                </p>
                                                                
                            
              
              <a href="#" class="close-paywall-overlay link-gray small">
                    	Fortsæt til artiklen nu <i class="fa fa-angle-right"></i>
				</a>

        </div>
    </section>


<?php elseif ($paywall == 'hard'): ?>

    <section class=" paywall paywall-hard" rel="noindex">
        
        <div class="paywall-inner">
        <p class="small">Artiklen er kun for abonnenter</p>

            <h2>Få hurtig adgang til artiklen</h2>

            <p>Med et digitalt abonnement får du adgang til alt indhold.</p>
                
             <div class="module-sm">
                 <button class="btn btn-live btn-md  btn-paywall btn-paywall-2  ">
                 	Få den første måned gratis nu <i class="fa fa-angle-right"></i>
                 </button>
			</div>
                
            
			<p class="small">
                Allerede abonnent?
                <a href="#" class="btn-topmenu-login toggle-login link-gray" data-href="" data-toggle="modal" data-target="#modal-login">
                    <i class="fa fa-user" aria-hidden="true"></i>&nbsp;Klik her
                </a>
            </p>
    </section>

    <?php elseif ($paywall == 'split'): ?>

            <section class=" paywall paywall-hard" rel="noindex">
                <p class="notice">Artiklen er kun for abonnenter</p>
                <div class="paywall-inner">
                    <div class="text-right paywall-login ">
                        <p class="small"><i class="fa fa-user"></i> <? dummy("text@author") ?> <a href="#">Log ud</a></p>
                    </div>

                

                    <h2>Få hurtig adgang til artiklen</h2>

                    <p>Med et digitalt abonnement får du adgang til alt indhold.</p>
                        
                     <div class="module-sm">
                         <button class="btn btn-live btn-md  btn-paywall btn-paywall-2  ">
                            Få den første måned gratis nu <i class="fa fa-angle-right"></i>
                         </button>
                    </div>
                        
                    
                  

                    <div class="subscription-alert">
                        <p style="font-size: 20px;">Du er logget ind med en profil, der ikke giver adgang til at læse artiklen.</p>
                        <p class="small">Du har følgende muligheder:</p>

                        
                            
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-md-offset-3  ">

                                <a href="http://b.kundeunivers.dk/" class="btn-arrow btn-block" style="margin-bottom: 10px;">
                                    <i class="fa fa-angle-right"></i>
                                    <p><strong>Jeg <u>har</u> abonnement </strong><br>
                                    <small>Registrér dit abonnement</small></p>
                                </a>
                                
                                <a href="http://abonnement.b.dk/berlingske-to-produkter-paywallbanner/" class="btn-arrow btn-block">
                                    <i class="fa fa-angle-right"></i>
                                    <p><strong>Jeg har <u>ikke</u> abonnement</strong><br>
                                    <small>Køb adgang </small></p>
                                </a>
                            </div>

                            
                        </div>

                    </div>
            </section>


    <?php elseif ($paywall == 'split2'): ?>

            <section class=" paywall paywall-hard" rel="noindex">
                <p class="notice">Artiklen er kun for abonnenter</p>
                <div class="paywall-inner">
                    <div class="text-right paywall-login ">
                        <p class="small"><i class="fa fa-user"></i> <? dummy("text@author") ?> <a href="#">Log ud</a></p>
                    </div>

                

                    <h2>Få hurtig adgang til artiklen</h2>

                    <p>Med et digitalt abonnement får du adgang til alt indhold.</p>
                        
                     <div class="module-sm">
                         <button class="btn btn-live btn-md  btn-paywall btn-paywall-2  ">
                            Få den første måned gratis nu <i class="fa fa-angle-right"></i>
                         </button>
                    </div>
                        
                    
                    <p>Allerede abonnement? <a href="http://b.kundeunivers.dk">Indtast dit dit ordrenummer <i class="fa fa-angle-right"></i></a> </p>

                    
            </section>



        

    <?php elseif ($paywall == 'weekend'): ?>

            <section class=" paywall paywall-hard" rel="noindex">
                <p class="notice">Artiklen er kun for abonnenter</p>
                <div class="paywall-inner">
                <div class="text-right paywall-login ">
                        <p class="small"><i class="fa fa-user"></i> <? dummy("text@author") ?> <a href="#">Log ud</a></p>
                    </div>

                

                    <h2 style="margin-bottom: 30px;">Dit abonnement giver kun adgang i weekenden.</h2>

                    
                    <p class="small" style="margin-bottom: 30px;">
                        Kontakt Kundeservice på <a href="tel:+4533753300">3375 3300</a> for at høre, hvordan du får adgang alle ugens syv dage.
                    </p>
            </section>

<?php endif; ?>