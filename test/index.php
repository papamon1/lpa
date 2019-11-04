<?php
include_once 'common.php';
?>

<!DOCTYPE html>
<html lang="es">
<?php include_once 'header.php' ?>


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
