<?php 
if (isset($_GET['paywall'])) {
    $paywall = $_GET['paywall'];
}
?>

<?php if($paywall == 'soft'): ?>


    <section class="paywall-fade paywall paywall-soft" rel="noindex">
        <div class="row">
            <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                <h2>God fornøjelse</h2>
                <p>
                    Denne artikel er normalt kun for abonnenter, men i dag kan du læse den gratis.
                </p>
                <p >Få adgang til alle artikler med et digitalt abonnement.</p>
                

                        <button class="btn btn-primary btn-sm  module-sm">
                            Få den første måned gratis <i class="fa fa-angle-right"></i>
                        </button>
                                                    <p class="small">
                                <a href="#" class="close-paywall-overlay link-gray">Nej tak, jeg vil bare læse artiklen <i class="fa fa-angle-right"></i></a>
                                                                
                            </p>
                
            </div>
        </div>
    </section>



<?php elseif ($paywall == 'hard'): ?>

    <section class="paywall-fade paywall paywall-hard" rel="noindex">
        <div class="row">
            <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                <p class="paywall--caption">Artiklen er kun for abonnenter</p>
                <h2>Velkommen</h2>
                <p>Få adgang til alle artikler på Berlingske.dk og Business.dk med et digitalt abonnement.</p>
            
                
            <button class="open-link btn btn-primary btn-sm  module-xs" data-link="http://abonnement.b.dk/berlingske-alle-produkter-abonnementslink/?utm_source=web_intern&amp;utm_medium=web_abonnementlinks&amp;utm_term=AL-151222-CP-WKLEDIT1WK&amp;utm_content=bus_indhold&amp;utm_campaign=abonnementer_berlingske&amp;callback_url=http%3A//login.berlingskemedia.net/sso/server/multisite-update/biz&amp;utm_source=paywall&amp;utm_medium=pw_køb_link&amp;utm_term=AL-151222-CP-WKLEDIT1PW&amp;utm_content=alle_abonnementer&amp;utm_campaign=Matrix">
                Få Berlingske Digital gratis <i class="fa fa-angle-right"></i>
            </button>
                                        <p class="small">
                    Allerede abonnent?
                                                    <a href="#" class="btn-topmenu-login toggle-login link-blue" data-href="/login_form?returnUri=http%3A//business.bemit.dk/redirect%3FreturnUri%3DaHR0cDovL2J1c2luZXNzLmJlbWl0LmRrL2thcnJpZXJlL3RoZS1oYXJkZXN0LWhhcmQtcGF5d2FsbA%25253D%25253D" data-toggle="modal" data-target="#modal-login">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp;Klik her
                    </a>
                </p>
                
            </div>
        </div>
    </section>



<?php endif; ?>