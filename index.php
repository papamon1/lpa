<?php
include_once 'common.php';
$pag=str_replace("/test/","", $_POST['pag']);
$lang_ = $_SESSION['lang'];
if($lang_==null){$lang_='es';}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>La Puerta Amarilla - Steaks and Burgers</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<meta name="Description" content="Las mejores hamburguesas y ambiente de Madrid">
<meta name="keywords" content="Burguers, Hamburguers, Wagyu, Meal, Atocha, Huertas, Madrid">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/touchTouch.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/touchTouch.jquery.js"></script>

<script>
 $(document).ready(function(){

  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
  $('.gallery .gall_item').touchTouch();
  
  if(localStorage.getItem('lpa_popup') != 'shown'){
      $("#myModal").css("display", "block");
      // localStorage.setItem('lpa_popup','shown');
  }



  });
</script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 9999; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding-top: 2px;
  padding-right: 16px;
  padding-bottom: 2px;
  padding-left: 16px;
  background-color: #ffdd17;
  color: white;
}

.modal-body {
  padding-top: 20px;
  padding-right: 16px;
  padding-bottom: 2px;
  padding-left: 16px;
}

.modal-footer {
  padding: 2px 16px;
  background-color: #ffdd17;
  color: white;
}
</style>
<!--[if lt IE 9]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">


<![endif]-->
</head>

<body class="page1" id="top">

  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 style="margin-top: -10px;">Oferta especial</h2>
    </div>
    <div class="modal-body">
      <p>Lo que ponemos</p>
      <p>Tiene que venir aqui</p>
    </div>
    <div class="modal-footer">
      <h3>Gracias!</h3>
    </div>
  </div>

</div>
<!--==============================
              header
=================================-->
<header>
<!--==============================
            Stuck menu
=================================-->

<section id="stuck_container">
    <div class="container">
    <div style="float: right; margin-top: 8px;">
            <a href="<?php echo $pag ?>?lang=es"><img src="images/flags/es.png" alt="Language - ES"/></a>
            <a href="<?php echo $pag ?>?lang=en"><img src="images/flags/en.png" alt="Language - EN"/></a>   
        </div>
    </div>  
    <div class="container">
      
        <div class="row">
        <div class="grid_12">
        <h1>
          <a href="index.php">
            <img src="images/Logo1.svg" alt="Logo alt" height="140.6px" width="334.4px" >
          </a>                 
        </h1>
          <div class="navigation">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.php"><?php echo $lang["MENU_INICIO"]; ?></a></li>
               <li><a href="entrantes.php"><?php echo $lang["MENU_ENTRANTES"]; ?></a></li>
               <li><a href="hamburguesas.php"><?php echo $lang["MENU_HAMBURGUESAS"]; ?></a></li>
               <li><a href="carnes.php"><?php echo $lang["MENU_CARNES"]; ?></a></li>
               <li><a href="postres.php"><?php echo $lang["MENU_POSTRES"]; ?></a></li>
               <li><a href="carta_<?php echo $lang_ ?>.pdf" target="_blank  "><?php echo $lang["MENU_CARTA"]; ?></a></li>               
               <li><a href="contacto.php"><?php echo $lang["MENU_CONTACTO"]; ?></a></li>               
             </ul>
            </nav>
            <div class="clear"></div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
</header>

<!--=====================
          Content
======================-->
<section class="content"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_3">
        <div class="banner">
		  <div class="gall_block">
          <img src="images/entrantes/torrenachos.jpg" alt="">
          <div class="bann_capt ">
            <div class="maxheight">
              <img src="images/icon1.png" alt="">
              <div class="bann_title"><?php echo $lang["HOME_PE"]; ?></div>
              <a href="entrantes.php"><?php echo $lang["HOME_VPE"]; ?></a>
            </div>
          </div>
        </div>
	   </div>
      </div>
      <div class="grid_3">
        <div class="banner">
		  <div class="gall_block">
          <div class="bann_capt  bn__1">
            <div class="maxheight">
              <img src="images/icon2.png" alt="">
              <div class="bann_title"><?php echo $lang["HOME_PP"]; ?></div>
              <a href="hamburguesas.php"><?php echo $lang["HOME_VPP"]; ?></a>
            </div>
          </div>
          <img src="images/hamburguesas/amarilla.jpg" alt="">
        </div>
		</div>
      </div>
      <div class="grid_3">
        <div class="banner ">
		  <div class="gall_block">
          <img src="images/carnes/parrilla_para_dos.jpg" alt="">
          <div class="bann_capt  bn__2">
            <div class="maxheight">
              <img src="images/icon4.png" alt="">
              <div class="bann_title"><?php echo $lang["HOME_PG"]; ?></div>
              <a href="carnes.php"><?php echo $lang["HOME_VPG"]; ?></a>
            </div>
          </div>
		  </div>
        </div>
      </div>
      <div class="grid_3">
        <div class="banner">
		  <div class="gall_block">
          <div class="bann_capt  bn__1">
            <div class="maxheight">
              <img src="images/icon3.png" alt="">
              <div class="bann_title"><?php echo $lang["HOME_PS"]; ?></div>
              <a href="postres.php"><?php echo $lang["HOME_VPS"]; ?></a>
            </div>
          </div>
          <img src="images/postres/brownie.jpg" alt="">
        </div>
		</div>
      </div>
      <!-- <div class="grid_3">
        <div class="block1">
          <div class="count">1.</div>
          Este cuadro se va Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a, commodo. Praesent faucibus malesuada faucibus. Donec laeet metus id laoreet malesuadarem ipsum dolor
          <br>
          <a href="#" class="btn">more</a>
        </div>
      </div>
      <!-- <div class="grid_4">
        <div class="block1">
          <div class="count">2.</div>
          Dasamus at magna non nunc tristique rhoncus. Kliquam nibh ante, egestas id dictum a, commodo. Praesent faucibus malesuada faucibus. Donec laeet metus id laoreet malesuadarem ipsumer
          <br>
          <a href="#" class="btn">more</a>
        </div>
      </div> -->
      <!-- <div class="grid_4">
        <div class="block1">
          <div class="count">3.</div>
          Tervamus at magna non nunc tristique rhoncus. Oliquam nibh ante, egestas id dictum a, commodo. Iraesent faucibus malesuada faucibus. Donec laeet etus id laoreet malesuadarem ipsolo
          <br>
          <a href="#" class="btn">more</a>
        </div>
      </div> -->
      <!--div class="grid_12">
        <div class="box">
          <div class="row">
            <div class="grid_5 preffix_1">
              <h2>Welcome</h2>
              <p>Post about this <strong class="color1"><a href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow">freebie</a></strong> will tell all you need to know about it. Need a good choice of <strong class="color1"><a href="http://www.templatemonster.com/properties/topic/food-restaurant/" rel="nofollow">themes</a></strong>? Visit TemplateMonster’s website.</p>
              Aliquam nibh e,estas id dictum a, commodo. Praesent faucibus malesuada faucibusonec laeet metus id laoreet malesuadarem ipsum dolor sit <br>
              <a href="#" class="btn">more</a>
            </div>
            <div class="grid_5">
              <h2>Feel the Savor of Life</h2>
              Dervamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a, commodo. Praesent faucibus malesuada ucibus. Donec laeet metus id laoreet malesuadarem ipsum dosit ametctetur adipiscing elit. Nullam consectetur orci sed nulla facilisis consequat. Curabitur vel lorem sit amet nulla ullamcorper fermentum. <br>
              <a href="#" class="btn">more</a>
            </div>
          </div>
        </div>
      </div -->
      <div class="grid_12">
        <h2><?php echo $lang["HOME_HORARIOC"]; ?></h2>
      </div>
      <div class="gallery">
        <div class="grid_4">
            <img class="gall_item" src="images/home/almuerzos.png" alt="">
            <br/>
            <ul class="shed">
                <li><?php echo $lang["HOME_HDESA"]; ?></li>
            </ul>                              
            <div class="clear"></div>                
        </div>
        <div class="grid_4">
            <img class="gall_item" src="images/home/desayunos.png" alt="">          
            <br/>
            <ul class="shed">
                <li><?php echo $lang["HOME_HCOMIDA"]; ?></li>
            </ul>                              
            <div class="clear"></div>                
        </div>
        <div class="grid_4">
            <img class="gall_item" src="images/home/cenas.png" alt="">
            <br/>
            <ul class="shed">
                <li><?php echo $lang["HOME_HCENA"]; ?></li>
            </ul>                              
            <div class="clear"></div>                
        </div>
      </div>          
  </div>
</section>
<!--==============================
              footer
=================================-->
<?php include_once 'footer.php' ?>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }

function ventana () {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
