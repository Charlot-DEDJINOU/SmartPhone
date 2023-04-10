<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/stylegenerale.css">
    <link rel="stylesheet" href="../CSS/Page.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
</head>
<?php
require_once "./fonctionGestion.php" ;
?>
<body>
 <div class="big-container">
        <div class="before-container">
            <span class="first-trait"></span>
           <span class="first-trait"></span>
       </div>
    <div class="container">
       <div class="first"></div>
       <div class="header-body-footer">
           <div class="head">
           <span class="date-coin"><?php echo date('H:i'); ?></span>
              <div class="header">
                  <span class="header-rond"></span>
                  <div class="beauty">
                    <span class="beauty-rond"></span>
                    <span class="beauty-trait"></span>
                 </div>
              </div>
              <div class="after-header">
                   <div class="reseau">
                       <span class="item one"></span>
                       <span class="item two"></span>
                       <span class="item three"></span>
                       <span class="item four"></span>
                   </div>
                   <div class="bacterie">
                        <div class="bacterie-interieur"><span class="interieur"></span></div>
                        <span class="item-bout"></span>
                   </div>
              </div>
           </div>
          <div class="body">
                <div class="container-app">
                        <span>Cahier de compte</span>
                        <div class="content">
                            <div class="item content1">
                            <a href="page1.php">Ajouter</a>
                            <a href="page2.php">Lister</a>
                            <a href="page3.php">Payer/Monnaie</a>
                            <a href="page4.php">Rechercher</a>
                            <a href="page5.php">Sommer</a>
                            </div>
                            <div class="item content2">
                                <p class="sommer"> On vous doit au totalement après avoir enlevé ce que vous devez aux autres une somme de <span class="prix"><?= sommer() ;?></span> Fcfa<p>
                            </div>
                        </div>
                </div>
          </div>
          <div class="footer">
               <a href="menu.php"><input type="button" class="footer-rond"></a>
               <span>Retour</span>
          </div>
        </div>
        <div class="end"></div>
    </div>
</div>
</body>
</html>