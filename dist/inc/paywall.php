

<?php if($paywall == 'soft'): ?>


    <section class="paywall paywall-soft" rel="noindex">
        
            <div class="paywall-inner ">
                <h2>God læselyst!</h2>
                <p class="module-lg">
                    Denne artikel kræver normalt, at du har et abonnement. Men i dag kan du læse den gratis!
                </p>
                
                <div class="module-sm">
                    <div class="btn-container">
                    	<div class="btn-container-inner">
                        
                        <button class="btn btn-live btn-md  btn-paywall ">
                        	<em><ins>Køb abonnement</ins></em>
                        	<div class="rotator" >
                        		<span class="msg1">Ingen binding</span>
                        		<span class="msg2">Prøv gratis i 30 dage</span>	
                        	</div>
                        	<i class="fa fa-angle-right"></i>
                            
                        </button>
                        </div>
                    </div>
					
                    <div class="btn-container">
                    	<div class="btn-container-inner">
						
                    	<button class="btn btn-link  btn-md btn-paywall close-paywall-overlay link-gray">
                    	<em>Fortsæt uden abonnement</em>
                    	    Vis mig artiklen <i class="fa fa-angle-right"></i>
                    	</button>
                    	</div>

                    </div>

                </div>
                        
                                                    
				<p class="small">
                    Allerede abonnent?
                                                    <a href="#" class="btn-topmenu-login toggle-login link-gray" data-href="" data-toggle="modal" data-target="#modal-login">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp;Klik her
                    </a>
                </p>
                                                                
                            
                
        </div>
    </section>



<?php elseif ($paywall == 'hard'): ?>

    <section class=" paywall paywall-hard" rel="noindex">
        
        <div class="paywall-inner">
                
                <h2>Få hurtig adgang til artiklen</h2>

                <p>Artiklen kræver abonnement.</p>
                
             <div class="module-sm">
            <button class="btn btn-live btn-md  btn-paywall ">
            	<em><ins>Køb abonnement</ins></em>
            	<div class="rotator" >
            		<span class="msg1">Ingen binding</span>
            		<span class="msg2">Prøv gratis i 30 dage</span>	
            	</div>
            	<i class="fa fa-angle-right"></i>
                
            </button>
				
			</div>
                
            
			<p class="small">
                    Allerede abonnent?
                                                    <a href="#" class="btn-topmenu-login toggle-login link-gray" data-href="" data-toggle="modal" data-target="#modal-login">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp;Klik her
                    </a>
                </p>
                <!-- <div class="alert alert-danger">
                                <p>Du er logget ind med en profil, der desværre ikke giver adgang til Berlingske.dk i dag. Det kan skyldes, at dit abonnement har begrænset digital adgang, eller at din ordre ikke er tilknyttet din profil. 
                                
                                <a href="https://b.kundeunivers.dk/">Tilknyt ordrenummer</a></p>

                <p><strong>Har du brug for hjælp?</strong>
                Kontakt Kundeservice på 3375 3330</p>
                </div> -->
                
        </div>
    </section>



<?php endif; ?>