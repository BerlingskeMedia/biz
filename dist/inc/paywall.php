

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
            
            <div class="paywall-inner">
            <p class="small">Artiklen er kun for abonnenter</p>

                <h2>Du har ikke adgang til at læse artiklen</h2>

                <p>Du er logget ind med en profil, der ikke giver adgang til at læse artiklen.</p>

                <p>Sådan kommer du videre:</p>
                    
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                     <a href="http://b.kundeunivers.dk/" class="btn btn-live btn-md  btn-paywall btn-paywall-2 btn-block btn-arrow module-sm">
                        Jeg har abonnement <i class="fa fa-angle-right"></i><br>
                        <small>Registrér dit abonnement</small>
                     </a>   
                    </div>

                    <div class="col-xs-12 col-md-6">
                     <a href="http://abonnement.b.dk/berlingske-to-produkter-paywallbanner/" class="btn btn-live btn-md  btn-paywall btn-paywall-2 btn-block btn-arrow module-sm">
                        Jeg har ikke abonnement <i class="fa fa-angle-right"></i><br>
                        <small>Køb adgang</small>
                     </a>   
                    </div>
                </div>
                 <div class="module-sm">
                     
                </div>
                    
                
                <p class="small">
                    Har du brug for hjælp? Kontakt Kundeservice på 3375 3300.
                </p>
        </section>

    <?php elseif ($paywall == 'weekend'): ?>

            <section class=" paywall paywall-hard" rel="noindex">
                
                <div class="paywall-inner">
                <p class="small">Artiklen er kun for abonnenter</p>

                    <h2>Dit abonnement giver kun adgang i weekenden.</h2>

                    
                    <p class="small">
                        Kontakt Kundeservice på 3375 3300 for at høre, hvordan du får adgang alle ugens syv dage.
                    </p>
            </section>

<?php endif; ?>