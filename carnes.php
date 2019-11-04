<?php
include_once 'common.php';
?>

<!DOCTYPE html>
<html lang="es">
<?php include_once 'header.php' ?>


<!--=====================
          Content
======================-->
<section class="content gallery pad1">
  <div class="container">
    <div class="row">
      <h2><?php echo $lang["CARNES_NC"]; ?></h2>
      <p><?php echo $lang["CARNES_NC_D"]; ?></p>
      <div class="grid_4">
        <div class="gall_block">
          <div style="height: 400px;">
            <a href="images/carnes/entrana.jpg" class="gall_item"><img src="images/carnes/entrana.jpg" alt="Entraña"></a>
            <div class="gall_bot">
            <div class="text1"><a href="#"><?php echo $lang["CARNES_ENTRA"]; ?></a></div>
            <?php echo $lang["CARNES_ENTRA_D"]; ?>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="grid_4">
        <div class="gall_block">
          <div style="height: 400px;">
            <a href="images/carnes/picanha.jpg" class="gall_item"><img src="images/carnes/picanha.jpg" alt="Picanha"></a>
            <div class="gall_bot">
            <div class="text1"><a href="#"><?php echo $lang["CARNES_PICANHA"]; ?></a></div>
            <?php echo $lang["CARNES_PICANHA_D"]; ?>
            </div>
          </div>
        </div>
      </div> -->
      <div class="grid_4">
        <div class="gall_block">
          <div style="height: 400px;">
              <a href="images/carnes/lomo_alto.jpg" class="gall_item"><img src="images/carnes/lomo_alto.jpg" alt="Lomo alto"></a>
            <div class="gall_bot">
            <div class="text1"><a href="#"><?php echo $lang["CARNES_LOMO"]; ?></a></div>
            <?php echo $lang["CARNES_LOMO_D"]; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="gall_block">
          <div style="height: 400px;">
            <a href="images/carnes/solomillo_trufado.jpg" class="gall_item"><img src="images/carnes/solomillo_trufado.jpg" alt="Solomillo"></a>
            <div class="gall_bot">
            <div class="text1"><a href="#"><?php echo $lang["CARNES_SOLOMILLO"]; ?></a></div>
            <?php echo $lang["CARNES_SOLOMILLO_D"]; ?>
            </div>
          </div>
        </div>
      </div>
    <div class="clear sep__1"></div>      
      <div class="grid_4">
        <div class="gall_block">
          <div style="height: 400px;">
            <a href="images/carnes/pollo_parrilla.jpg" class="gall_item"><img src="images/carnes/pollo_parrilla.jpg" alt="Pollo de corral"></a>
            <div class="gall_bot">
            <div class="text1"><a href="#"><?php echo $lang["CARNES_POLLO"]; ?></a></div>
            <?php echo $lang["CARNES_POLLO_D"]; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="gall_block">
          <div style="height: 400px;">
              <a href="images/carnes/parrilla_para_dos.jpg" class="gall_item"><img src="images/carnes/parrilla_para_dos.jpg" alt="Parrilla"></a>
            <div class="gall_bot">
            <div class="text1"><a href="#"><?php echo $lang["CARNES_PARRILLA"]; ?></a></div>
            <?php echo $lang["CARNES_PARRILLA_D"]; ?>
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
