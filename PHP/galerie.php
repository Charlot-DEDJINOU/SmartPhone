<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Stylegenerale.css">
    <link rel="stylesheet" href="../CSS/galerie.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
    <script type="text/javascript" src="../JS/galerie.js"></script>
</head>
<?php
  $url="menu.php" ;
 function galerie(){
    $photos=fopen('../donnee/galerie.txt','rw') ;
    $k=0 ;
    while($photo=fgets($photos)){
        if($k===0 || $k===26  || $k===49)
           echo "<h2>$photo</h2>" ;
        else
           echo "<a href='galerie.php?choix=$photo&num=$k'><img src='../imagehtml/$photo'></a>" ;
        $k++ ;
    }
    fclose($photos) ;
 }

 if(isset($_GET['choix'])){
    $url='galerie.php';
    $back=$_GET['choix'] ;
    $back="background-image:url(../imagehtml/$back)" ;
    $num=$_GET['num'] ;
 }
?>
<body onload="charlot();">
 <div class="big-container">
        <div class="before-container">
            <span class="first-trait"></span>
           <span class="first-trait"></span>
       </div>
    <div class="container">
       <div class="first"></div>
       <div class="header-body-footer" id="slider" <?php if(isset($back)) echo "style='$back' name='$num'" ;?>>
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
          <div class="body" <?php if(isset($back)) echo 'hidden' ; ?>>
             <?php galerie() ;?>
          </div>
          <div class="bodybutton" <?php if(!isset($back)) echo 'hidden' ; ?>  style="width:100%; <?php if(isset($back)) echo 'display:flex;' ; ?>  justify-content:space-between">
            <button onclick="prev() ;" style="background:none; border:none ;color:blue;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/></svg> </button>
            <button onclick="next() ;" style="background:none; border:none; color:blue"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg></button>
          </div>
          <div class="footer">
               <a href="<?= $url ?>"><input type="button" class="footer-rond"></a>
               <span>Retour</span>
          </div>
        </div>
        <div class="end"></div>
    </div>
</div>
</body>
</html>