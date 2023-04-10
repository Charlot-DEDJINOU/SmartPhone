<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/STylegenerale.css">
    <link rel="stylesheet" href="../CSS/Musique.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
    <script type="text/javascript" src="../JS/musique.js"></script>
</head>
<?php
   function musique(){
    $musiques=fopen('../donnee/musique.txt','r') ;
    $k=-1 ;
    while($title=fgets($musiques)){
      $k++ ;
            echo "<a class='musique' name=$title id=$k onclick='choix($k)'>
            <span class='icone'><svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-music-note-beamed' viewBox='0 0 16 16'><path d='M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z'/><path fill-rule='evenodd' d='M14 11V2h1v9h-1zM6 3v10H5V3h1z'/><path d='M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z'/></svg></span>
            <span class='title $k'>$title</span>
            </a>" ;
    }
    fclose($musiques) ;
   }
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
            <div class="musiques">
               <?php musique() ; ?>
            </div>
            <div class="actuel">
               <audio src='' controls='controls' loop='loop' autoplay='autoplay' name='' id="musique"></audio>
               <div class="bodybutton" style="width:100%;height:40%;display:flex;justify-content:space-between;align-items:center;">
                  <button onclick="prev() ;" style="background:none; border:none;height:20px;margin-left:25px"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi-skip-backward" viewBox="0 0 16 16"><path d="M.5 3.5A.5.5 0 0 1 1 4v3.248l6.267-3.636c.52-.302 1.233.043 1.233.696v2.94l6.267-3.636c.52-.302 1.233.043 1.233.696v7.384c0 .653-.713.998-1.233.696L8.5 8.752v2.94c0 .653-.713.998-1.233.696L1 8.752V12a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm7 1.133L1.696 8 7.5 11.367V4.633zm7.5 0L9.196 8 15 11.367V4.633z"/></svg></button>
                  <marquee behavior='sroll' style="background:none; border:none;height:20px;display:flex;justify-content:center;align-items:center;font-size:10px;font-weight:bold"><span id='title'></span></marquee>
                  <button onclick="next() ;" style="background:none; border:none;height:20px;margin-right:25px"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi-skip-forward" viewBox="0 0 16 16"><path d="M15.5 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V8.752l-6.267 3.636c-.52.302-1.233-.043-1.233-.696v-2.94l-6.267 3.636C.713 12.69 0 12.345 0 11.692V4.308c0-.653.713-.998 1.233-.696L7.5 7.248v-2.94c0-.653.713-.998 1.233-.696L15 7.248V4a.5.5 0 0 1 .5-.5zM1 4.633v6.734L6.804 8 1 4.633zm7.5 0v6.734L14.304 8 8.5 4.633z"/></svg></button>
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