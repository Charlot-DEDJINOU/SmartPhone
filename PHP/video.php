<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Stylegenerale.css">
    <link rel="stylesheet" href="../CSS/video.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
    <script type="text/javascript">
       function Initelement(){}
    </script>
</head>
<?php
  $url="menu.php" ;
 function video(){
    $videos=fopen('../donnee/video.txt','r') ;
    $k=0 ;
    while($video=fgets($videos)){
        if($k===0 || $k===15  || $k===31)
           echo "<h2>$video</h2>" ;
        else
           echo "<a href='video.php?choix=$video'><video src='../Video/$video' class='video'></video></a>" ;
        $k++ ;
    }
    fclose($videos) ;
 }

    if(isset($_GET['choix']))
    {
        $url='video.php' ;
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
       <div class="header-body-footer" <?php if(isset($_GET['choix'])) echo"style=background-image:url(../imagehtml/musique5.jpg)"?>>
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
          <div class="body" <?php if(isset($_GET['choix'])) echo 'hidden'; ?>>
            <?php video() ;?>
          </div>
          <div class="bodyvideo">
          <video src='../Video/<?=$_GET['choix']?>' controls='controls' loop='loop' autoplay='autoplay' <?php if(!(isset($_GET['choix']))) echo 'hidden' ;?>></video>
          </div>
          <div class="footer">
               <a href="<?= $url ?>"><input type="button" class="footer-rond"></a>
               <span>Retour</span>
          </div>
        </div>
        <div class="end"></div>
    </div>
</div>