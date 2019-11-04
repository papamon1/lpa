<?php
include_once 'common.php';
?>

<!DOCTYPE html>
<html lang="es">
<?php include_once 'header.php' ?>

<!--=====================
          Content
======================-->
<section class="content ctn__1">
  <div class="container">

          <div class="grid_12">
              <h2><?php echo $lang["CONTACTO_NP"]; ?></h2>
               <div align="center"><iframe src="https://module.lafourchette.com/es_ES/module/421731-60ab1" style="width: 100%; min-height:480px; border:none; scrolling:yes;"></iframe></div>
          </div>
      
  </div>
</section>
<section class="content ctn__1">
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h2><?php echo $lang["CONTACTO_DONDE"]; ?></h2>
        <div class="map">
          <div class="row">
            <div class="grid_9">
              <figure class="">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1518.9372580757426!2d-3.6959098226992744!3d40.411630567587835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x44605a3b49479f82!2sLa+Puerta+Amarilla+(steaks+%26+burgers)!5e0!3m2!1ses!2ses!4v1538679051424" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </figure>
            </div>
            <div class="grid_3">
              <div class="map_block">
                <div class="map_title"><<?php echo $lang["CONTACTO_DIRECCION"]; ?>:</div>
                C/ Fúcar, 9<br> 28014, MADRID
              </div>
              <div class="map_block">
                <div class="map_title"><?php echo $lang["CONTACTO_TELEFONO"]; ?>:</div>
                +34 911 451 168
              </div>
              <div class="map_block">
                <div class="map_title"><?php echo $lang["CONTACTO_EMAIL"]; ?>:</div>
                <a href="mailto:toctoc@lapuertamarilla.es">toctoc@lapuertamarilla.es</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
<?php include_once 'footer.php' ?>
