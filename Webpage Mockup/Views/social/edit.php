<!DOCTYPE html>
<html lang="en">
	<meta name="description" content="">
  <meta name="author" content="Nathan Dalling">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <head>
        <title>Social Posting </title>
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
    	<body data-spy="scroll" data-target=".navbar-example">
  ...
  <div class="navbar-example">
    <ul class="nav nav-tabs" role="tablist">
      <li>Post Your Own Before and After pictures

Before: <input type="image" name="before"value="<?=$model['before']?>" /><br>
After: <input type="image" name="after" value="<?=$model['after']?>"/>

<input type="submit" name="picture-sub" id="picture-sub" value="Submit Your awesome pictures" />


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> </li>...
      <li>
      	 <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="..." alt="...">
      <div class="carousel-caption">
        before
      </div>
    </div>
    <div class="item">
      <img src="..." alt="...">
      <div class="carousel-caption">
        ...and
      </div>
    </div>
    ...after
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<div data-spy="affix" data-offset-top="60" data-offset-bottom="200">
 
      </li>
      
    </ul>
  </div>
  ...
</body>
    <!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->
<!-- facebook share -->
<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div>
<a href="#js-posting">Posting  
	</a>

</li>
<li>
<a href="#js-caressol">Caressol</a>
</li>

</div>


<nav>
      <p><a href="/">Home</a></p>
      <p><a href="/contact">Contact</a></p>
    </nav>

    <div>
      
    </div>

    <footer>
    	<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="its NOT aREAL SITE YET there is no help">
  help??
</button>
     <p>&copy; Copyright  by Nathan Dalling</p>
    </footer>
    </body>
</html>
