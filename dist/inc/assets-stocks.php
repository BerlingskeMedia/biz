 <section class="deck">
        
        <div class="col-md-12">
        <div class="deck-header border-xs-top">
            <h1 >
            Investor
          </h1>
        </div>
          

        <nav class="nav-deck">
            <ul>
              <li>
                <a href="#">Aktier</a>
              </li>
              <li>
                <a href="#">Obligationer</a>
              </li>
              <li>
                <a href="#">Investeringsforeninger</a>
              </li>
              <li>
                <a href="#">Valuta</a>
              </li>
              <li>
                <a href="#">Markeder</a>
              </li>
            </ul>
        </nav>
          
        </div>
        
        <!-- Netdania start: -->
        
          
          <div class="col-md-4 col-sm-6">
            <h2 class="micro-header">OMX C20 CAP</h2>
            <div class="stock-graph">
              <img src="http://businessdk.netdania.com/backend/GetImage.aspx?instr=OMXC20CAP.co&prv=ms_dlc&points=288&ts=5&current={CURR}&w=300&h=200&bgcolor=fadcd2&isFP=true&st=false&tp=1" class="img-responsive">
              <p class="micro">Kursdata kan være forsinket 15 minutter</p>
          </div>
          </div>

          <div class="col-md-8 col-sm-6">


            <div class="row">
              
              <div class="col-md-6 col-sm-12">
      <h2 class="micro-header">Vindere</h2>
      
          <div class="stock-deck table-responsive">
            
            <table class="table table-stocks">
              <thead>
                <tr>
                  <th>Navn</th>
                  <th class="right">Seneste</th>
                  <th class="right">+/-</th>
                  <th class="right">%</th>
                </tr>
              </thead>  
              <tbody>
              <? while (dumb_luck("10")): ?>
                <tr class="<? if (dumb_luck("50%")): ?>plus<? else: ?>minus<? endif ?>">
                  <td class="stock-name"><a href="#"><? dummy("text@stockcompanies") ?></a></td>
                  <td class="right "><? dummy("text@stock-value") ?></td>
                  <td class="right change">-<? dummy("text@stock-change") ?></td>
                  <td class="right change"><? dummy("text@stock-change-2") ?></td>
                </tr>
              <? endwhile ?>
              </tbody>
            </table>

          </div>


      </div>
      <div class="col-md-6 col-sm-12">
      <h2 class="micro-header">Tabere</h2>
           <div class="stock-deck table-responsive">
            
            <table class="table table-stocks">
              <thead>
                <tr>
                  <th>Navn</th>
                  <th class="right">Seneste</th>
                  <th class="right">+/-</th>
                  <th class="right">%</th>
                </tr>
              </thead>  
              <tbody>
              <? while (dumb_luck("10")): ?>
                <tr class="<? if (dumb_luck("50%")): ?>plus<? else: ?>minus<? endif ?>">
                  <td class="stock-name"><a href="#"><? dummy("text@stockcompanies") ?></a></td>
                  <td class="right "><? dummy("text@stock-value") ?></td>
                  <td class="right change">-<? dummy("text@stock-change") ?></td>
                  <td class="right change"><? dummy("text@stock-change-2") ?></td>
                </tr>
              <? endwhile ?>
              </tbody>
            </table>

          </div>
      </div>


            </div>
          </div>
      
      
      
          <!-- netdania end -->

      
      
      <div class="col-md-12">
        <div class="section-sponsor-lg"><a href="http://www.nykredit.dk/#!/dit-liv/bolig/boligfinansiering/dagens-obligationskurser-udbetaling?ref=businessdk" target="_blank"><i class="fa fa-caret-right"></i>  Se de aktuelle obligationskurser</a> <a href="http://www.nykredit.dk/#!/dit-liv/bolig/boligfinansiering/dagens-obligationskurser-udbetaling?ref=businessdk" target="_blank"><img class="sponsor-logo" src="images/nykredit_logo_negativ.jpg"></a></div>
      </div>

      </section> 