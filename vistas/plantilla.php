<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<meta name="robots" content="index, follow">
<title>Portafolio Larry Martínez</title>
<link rel="shortcut icon" href="vistas/favicon-jlmr.jpg">
<!-- MY CSS -->
<link rel="stylesheet" type="text/css" href="vistas/css/assets.css" />
<link rel="stylesheet" type="text/css" href="vistas/css/main.css" />

</head>
<body>
<div id="container" class="container"> 

   <?php
   
   /* Header */
   include "modulos/header.php";
   ?>
  <div class="content-scroller">
    <div class="content-wrapper"> 
        <?php

        /* if (isset($_GET["ruta"])) {
            if ($_GET["ruta"] == "?page=portfolio" ||
                $_GET["ruta"] == "?page=about" ||
                $_GET["ruta"] == "?page=skills" || 
                $_GET["ruta"] == "?page=experience" || 
                $_GET["ruta"] == "?page=education" ||
                $_GET["ruta"] == "?page=contact" ||
                $_GET["ruta"] == "?page=introduction" ) {
                include "modulos/".$_GET["ruta"].".php";
            }else{
                include "modulos/404.php";
            }
        } */
        /* Portfolio */
        include "modulos/portfolio.php";
        /* About me */
        include "modulos/about-me.php";
        /* Skills */
        include "modulos/skills.php";
        /* Experience */
        include "modulos/experience.php";
        /* Education */
        include "modulos/education.php";
        /* Contact */
        include "modulos/contact.php";
        /* Introduction*/
        include "modulos/introduction.php";

        
        ?>    
    </div>
    <!-- content-wrapper --> 
  </div>
  <!-- content-scroller --> 
</div>



<!-- MY JAVASCRIPT -->
<script src="vistas/js/jquery-2.0.3.min.js"></script>
<script src="vistas/js/sendemail.js"></script>
<script src="vistas/js/progressbar.js"></script>
<script src="vistas/js/jquery.min.js"></script>
<script src="vistas/js/jquery.fancybox.js"></script>
<script src="vistas/js/head.min.js"></script>
<script src="vistas/js/imagesloaded.min.js"></script> 
<script src="vistas/js/masonry.min.js"></script> 
<script src="vistas/js/class_helper.js"></script> 
<script src="vistas/js/grid_gallery.js"></script> 
<script src="vistas/js/isotope.pkgd.min.js"></script>
<script src="vistas/js/owl.carousel.min.js"></script>
<script src="vistas/js/jquery.flexslider.js"></script>

<script src="vistas/js/carousel.js"></script> 
<script src="vistas/js/jquery.easypiechart.js"></script> 
<script src="vistas/js/text.rotator.js"></script>

<script>
head.js(
		{ mousewheel : "vistas/js/jquery.mousewheel.js" },
		{ mwheelIntent : "vistas/js/mwheelIntent.js" },
		{ jScrollPane : "vistas/js/jquery.jscrollpane.min.js" },
		{ history : "vistas/js/jquery.history.js" },
		{ stringLib : "vistas/js/core.string.js" },
		{ easing : "vistas/js/jquery.easing.1.3.js" },
		{ smartresize : "vistas/js/jquery.smartresize.js" },
		{ page : "vistas/js/jquery.page.js" }
		);
</script>  
<script src="vistas/js/jquery.fitvids.js"></script>
<script src="vistas/js/settings.js"></script>
<script src="vistas/js/functions.js"></script>

</body>
</html>