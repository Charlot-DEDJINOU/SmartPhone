<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Stylegenerale.css">
    <link rel="stylesheet" href="../CSS/smsamour.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
    <script type="text/javascript">
       function Initelement(){}
    </script>
</head>
<?php
   $choix='amour';
   if(!empty($_GET['action'])){
    $choix=$_GET['action'];
   }

   function amour(){
    $smss=fopen('../donnee/smsamour.txt','r') ;
    $i=1 ;
    while($sms=fgets($smss)){
          echo "<span class='span'>$i -$sms <span style='color:red'>♥</span></span>";
          $i++ ;
    }
    fclose($smss) ;
   }

   function bonnenuit(){
    $smss=fopen('../donnee/smsbonnenuit.txt','r') ;
    $i=1 ;
    while($sms=fgets($smss)){
          echo "<span class='span'>$i -$sms <span style='color:yellow'>♥</span></span>";
          $i++ ;
    }
    fclose($smss) ;
   }

   function matinal(){
    $smss=fopen('../donnee/smsmatinal.txt','r') ;
    $i=1 ;
    while($sms=fgets($smss)){
          echo "<span class='span'>$i -$sms <span style='color:green'>♥</span></span>";
          $i++ ;
    }
    fclose($smss) ;
   }
?>
<body onload="Initelement();">
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
            <div class="typesms">
                <span style="background-color:<?php if($choix==='amour') echo 'pink' ?>"><a href="smsamour.php?action=amour">amour</a></span>
                <span style="background-color:<?php if($choix==='matinal') echo 'green' ?>; filter:brightness(200%);"><a href="smsamour.php?action=matinal">Matinal</a></span>
                <span style="background-color:<?php if($choix==='bonnenuit') echo 'yellow' ?>"><a href="smsamour.php?action=bonnenuit">Bonne nuit</a></span>
            </div>
            <div class='amour' <?php if($choix!=='amour') echo 'hidden' ?>><?php amour() ;?></div>
            <div class='bonnenuit' <?php if($choix!=='bonnenuit') echo 'hidden' ?>><?php bonnenuit() ;?></div>
            <div class='matinal' <?php if($choix!=='matinal') echo 'hidden' ?>><?php matinal() ;?></div>
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