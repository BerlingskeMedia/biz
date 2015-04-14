<? require_once("../../dummy/dummy.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<style type="text/css">
	
	.content {
		margin: 0 auto;
		width: 600px;
	}

	aside {
		width: 50%;
		float: right;
		margin: 0 0 0 20px;
	}
	.link {
		margin: 20px 0 50px; 
	}
	.link img {
		vertical-align: text-top;
		float: left;
		margin-right: 10px;
	}

</style>

<div class="content">
	<? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
	<aside><p><? while (dumb_luck("5")): ?><? dummy("text@paragraph") ?><? endwhile ?></p></aside>
	<? while (dumb_luck("1")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
	<div class="link">
		<img src="<? dummy("image@60x60,") ?>" width="" height="" alt="" />
		<a href="#"><? dummy("text@headline") ?></a>
	</div>

	<? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

</div>




</body>
</html>