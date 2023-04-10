<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Stylegenerale.css">
    <link rel="stylesheet" href="../CSS/menujeu.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
    <script type="text/javascript">
       function Initelement(){}
    </script>
</head>
<?php
    function niveau() {
        $liste=['Facile','Normal','Difficile','Professionnel'] ;
       for($i=0;$i<4;$i++){
        echo "<div class='choix'><input type='radio' name='niveau' value='$liste[$i]'>$liste[$i]</div>";
       }
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
             <audio autoplay="autoplay" controls="controls" loop="loop" hidden>
               <source src="../Audio/Zaho_-_Ma_lune_(Paroles)(128k).mp3" type="audio/mpeg">
             </audio>
             <form action='niveau.php' method="POST">
                 <h1>Niveau du jeu</h1>
                 <div class="niveaux"><?php niveau(); ?></div>
                 <input type="submit">
             </form>
             <marquee behavior="alternate"><div class="texte"><?php if(isset($texte)) echo $texte ;?></div></marquee></div>
          <div class="footer">
               <a href="menu.php"><input type="button" class="footer-rond"></a>
               <span>Quitter</span>
          </div>
        </div>
        <div class="end"></div>
    </div>
</div>
</body>
</html>