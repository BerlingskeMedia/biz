<?php if($label === 'breaking'): ?>
	<aside class=" article-newsletter-embedded newsletter-breaking">	
		
		
		
		<div class="header">Få breaking via e-mail</div>
		
		<div class="message">
			<strong>Tak for din tilmelding.</strong>
			<p><small><a class="link-blue" href="http://profil.berlingskemedia.dk/nyhedsbreve/berlingske" target="_blank">Se alle Berlingskes nyhedsbreve <i class="bicon-angle-right"></i></a></small></p>
		</div>

		<form action="" class="form-embedded-newsletter  form-round-oneliner module-xxs">
			<div class="clearfix">
				<!-- the class .newsletter-email is used by js to slide down breaking cheackbox-->
				<input type="email" placeholder="Din e-mailadresse" required class="newsletter-email">
				<button class="btn  btn-black">OK</button>

			</div>
			<!-- <div class="msg-error "><i class="bicon-angle-up"></i> Du skal indtaste en gyldig e-mailadresse</div> -->
			<div class="form-options">
				
				<div class="checkbox checkbox-styled mb-05">
					<label>
						<input type="checkbox" class="" checked > <span>Breaking News</span>
					</label>
				</div>	

				<div class="checkbox checkbox-styled mb-05">
					<label>
						<input type="checkbox" class=""  checked> <span>Business Morgen</span>
					</label>
				</div>
				<div class="checkbox checkbox-styled mb-05">
				<label>
					<input type="checkbox" class=""  checked> <span>Business Eftermiddag</span>
				</label>
				</div>

				
			</div>
		</form>
		
		<hr>	

		<div class="header">Breaking via SMS</div>
		Send <strong>Berlingske break</strong> til 1929
	</aside>


<!-- inline, after the iframe -->

<?php endif; ?>

