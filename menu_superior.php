<?php
include_once 'common.php';
$pag=str_replace("/test/","", $_POST['pag']);
$lang_ = $_SESSION['lang'];
if($lang_==null){$lang_='es';}
?>

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
