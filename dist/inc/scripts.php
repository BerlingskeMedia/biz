
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Responsive videos -->
<script src="js/plugins/jquery.fitvids.js"></script>

<!-- Image slider -->
<script src="js/plugins/slick.min.js"></script>

<!-- Count up stock quote -->
<script src="js/plugins/countUp.min.js"></script>
<?php 
$stock_change = mt_rand(0,250)/100;
 ?>
<script type="text/javascript">
var stockOptions = {
  useEasing : true, 
  useGrouping : true, 
  separator : ',', 
  decimal : ',', 
  prefix : '<b></b>', 
  suffix : '<i>%</i>' 
};
var stockCounter = new countUp("stock-count", 0, <?php echo $stock_change; ?>, 2, 1, stockOptions);
stockCounter.start();
</script>

<script src="js/app.js?ver=<? dummy("text@number") ?>"></script>

<script type='text/javascript' src="//wurfl.io/wurfl.js"></script>
<script>
	var isTablet = WURFL.form_factor == "Tablet"; 

	if (isTablet) {
		$('head').append('<meta name="viewport" content="width=940">');
	} else {
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1">');
	}
    //alert(WURFL.form_factor);
</script>