<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Stylegenerale.css">
    <link rel="stylesheet" href="../CSS/jeux.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
    <script type="text/javascript">
       function Initelement(){}
    </script>
</head>
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
            <audio autoplay="autoplay" controls="controls" loop="loop" hidden>
               <source src="../Audio/Zaho_-_Ma_lune_(Paroles)(128k).mp3" type="audio/mpeg">
             </audio>
             <div class="jeux-acceuil">
                  <h1>NOMBRE MYSTERE</h1>
                  <a href="menujeu.php" ><input type='submit' value='Jouer'></a>
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