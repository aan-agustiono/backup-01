<?php
	$pth = isset($_REQUEST["dirs"])? ($_REQUEST["dirs"]): "empty" ;
	$fls = isset($_REQUEST["files"])? ($_REQUEST["files"]): "empty" ;
	$url = "/~ants/media/images/docs/gambar";
	$dsl = "/home/ants/public_html/media/images/docs/gambar";
	$dir = $dsl."/".$pth;
	$lnk = $_SERVER["SERVER_NAME"].$url;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'assets/fonts/fontawesome.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/theme.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand font-weight-bolder mr-3" href=".."><img src="assets/img/logo.png"></a>
    <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsDefault">
    	<ul class="navbar-nav ml-auto align-items-center">
    		<li class="nav-item"><a class="nav-link active"  href="javascript:window.open('','_self').close();">close</a></li>
    		<li class="nav-item">
    		<a class="nav-link" href=""><img class="rounded-circle mr-2" src="assets/img/av.png" width="30"><span class="align-middle"><?php echo $_SERVER["REMOTE_ADDR"]; ?></span></a>
    		</li>
    	</ul>
    </div>
    </nav>    
    <main role="main">
        
    
    <section class="bg-gray200 pt-2 pb-8">
    <div class="container"><img class="card-img-top mb-2" src="http://<?php echo $lnk."/".$pth."/".$fls; ?>" alt="Card image"></div>
	<h4><center><?php echo $fls; ?></center></h4>
    </section>
        
    </main>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/theme.js"></script>

</body>    
</html>
