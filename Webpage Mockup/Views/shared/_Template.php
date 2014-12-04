<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>CasualFit</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="../content/css/main.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<li class="dropdown">
        <a id="drop4" role="button" data-toggle="dropdown" href="#">menu <span class="caret"></span></a>
        <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">Home</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">Today's menu </a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">schedule</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">social</a></li>
        </ul>
      </li>
	</head>

	<body>
		<div id="top-nav">
			<? include __DIR__ . '/../../inc/_nav.html'; ?>
		</div>
			<? include __DIR__ . '/../' . $view; ?>
			<footer>
				<div class="container">
					<p>
						&copy; Copyright  by nathan
					</p>
				</div>
			</footer>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.0/holder.js"></script>
	</body>
</html>



<!-- <html lang="en">
<head>

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
 <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>pg1 register</title>
  <li class="dropdown">
        <a id="drop4" role="button" data-toggle="dropdown" href="#">menu <span class="caret"></span></a>
        <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">Home</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">Today's menu </a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">schedule</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">social</a></li>
        </ul>
      </li>
  <meta name="description" content="">
  <meta name="author" content="Nathan Dalling">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <!--<link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
</head>-->