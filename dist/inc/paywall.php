

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

            <h2>Få hurtig adgang til artiklen</h2>

            <p>Med et digitalt abonnement får du adgang til alt indhold.</p>
                
             <div class="module-sm">
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
            <!-- <div class="alert alert-info">
                <p>Du er logget ind med en profil, der desværre ikke giver adgang til Business.dk i dag. Det kan skyldes, at dit abonnement har begrænset digital adgang, eller at din ordre ikke er tilknyttet din profil. 
                <a href="https://b.kundeunivers.dk/">Tilknyt ordrenummer</a></p>
                <p><strong>Har du brug for hjælp?</strong> Kontakt Kundeservice på 3375 3330</p>
            </div> -->
                
        </div>
    </section>



<?php endif; ?>