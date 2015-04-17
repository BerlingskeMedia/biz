
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
var options = {
  useEasing : true, 
  useGrouping : true, 
  separator : ',', 
  decimal : ',', 
  prefix : '', 
  suffix : '<i>%</i>' 
};
var demo = new countUp("stock-count", 0, <?php echo $stock_change; ?>, 2, 1, options);
demo.start();
</script>

<script src="js/app.js?ver=<? dummy("text@number") ?>"></script>
