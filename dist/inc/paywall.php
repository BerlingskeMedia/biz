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
                <p >Få adgang til alle artikler på Berlingske.dk og Business.dk med et <a href="[MARKETING LANDINGPAGE LINK]">digitalt abonnement</a> - den første  måned er gratis.</p>
                

                        <button class="btn btn-primary btn-sm close-paywall-overlay module-sm">
                            Nej tak, jeg vil bare læse artiklen
                        </button>
                                                    <p class="small">
                                Allerede abonnent?
                                                                <a href="#" class="btn-topmenu-login toggle-login link-blue" data-href="/login_form?returnUri=http%3A//business.bemit.dk/redirect%3FreturnUri%3DaHR0cDovL2J1c2luZXNzLmJlbWl0LmRrL2ZvcnNpZGUvcGF5d2FsbC1zb2Z0" data-toggle="modal" data-target="#modal-login">
                                    <i class="fa fa-user" aria-hidden="true"></i>&nbsp;Log ind
                                </a>
                            </p>
                
            </div>
        </div>
    </section>



<?php elseif ($paywall == 'hard'): ?>




    <section class="paywall-fade paywall paywall-hard" rel="noindex">
        <div class="row">
            <div class="col-xs-12">
                <p class="paywall--caption">Artiklen er kun for abonnenter</p>
                <h2>Historier med perspektiv</h2>
                <p>
                    Vi kæmper hver dag for at levere journalistik, der gør en forskel.
                    Få adgang til alle artikler på Berlingske.dk og Business.dk med et digitalt abonnement - den første måned er gratis.
                </p>
            </div>
            <div class="col-xs-12 col-xl-10 col-xl-offset-1">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <button class="paywall--button open-link" data-link="http://abonnement.b.dk/berlingske-alle-produkter-abonnementslink/?utm_source=web_intern&amp;utm_medium=web_abonnementlinks&amp;utm_term=AL-151222-CP-WKLEDIT1WK&amp;utm_content=bus_indhold&amp;utm_campaign=abonnementer_berlingske&amp;callback_url=http%3A//login.berlingskemedia.net/sso/server/multisite-update/biz&amp;utm_source=paywall&amp;utm_medium=pw_køb_link&amp;utm_term=AL-151222-CP-WKLEDIT1PW&amp;utm_content=alle_abonnementer&amp;utm_campaign=Matrix">
                            Få Berlingske Digital gratis
                        </button>
                                                    <p class="small">
                                Allerede abonnent?
                                                                <a href="#" class="btn-topmenu-login toggle-login link-blue" data-href="/login_form?returnUri=http%3A//business.bemit.dk/redirect%3FreturnUri%3DaHR0cDovL2J1c2luZXNzLmJlbWl0LmRrL2thcnJpZXJlL3RoZS1oYXJkZXN0LWhhcmQtcGF5d2FsbA%25253D%25253D" data-toggle="modal" data-target="#modal-login">
                                    <i class="fa fa-user" aria-hidden="true"></i>&nbsp;Klik her
                                </a>
                            </p>
                                            </div>
                </div>
            </div>
        </div>
    </section>



<?php endif; ?>