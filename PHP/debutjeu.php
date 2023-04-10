<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Stylegenerale.css">
    <link rel="stylesheet" href="../CSS/debutjeu.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
    <script type="text/javascript">
       function Initelement(){}
    </script>
</head>

<?php
   $values='Envoyer' ;
   $title='Entrez le nombre mystere' ;
   $url='debutjeu.php' ;
   $nombre_mystere=file_get_contents('../donnee/nombre.txt');
   $value="Debut" ;
   if(isset($_POST['nombre'])){
   file_put_contents('../donnee/total.txt',$_POST['nombre'].PHP_EOL,FILE_APPEND) ;
    $value="C'est plus" ;
    $color='blue' ;
    $nombre=(int)$_POST['nombre'] ;
    if($nombre==$nombre_mystere){
      $values='Rejouer';
      $value="Youpi !!" ;
      $color='green' ;
      $title="Bravo!! vous avez trouvé le nombre mystere en <span style='color:red'>".count(file('../donnee/total.txt'))-1 ."</span> coups";
      $url='menujeu.php';
    }
    else if($nombre>$nombre_mystere){
      $value="C'est moins" ;
      $color='orange';
    }
            
   }

   function affiche(){
      $liste=file('../donnee/total.txt') ;
      foreach($liste as $nombre)
           echo $nombre ;
   }
?>
<body onload='Initelement();'>
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
          <div class='body'>
             <audio autoplay='autoplay' controls='controls' loop='loop' hidden>
               <source src='../Audio/Zaho_-_Ma_lune_(Paroles)(128k).mp3' type='audio/mpeg'>
             </audio>
             <h4><?= $title ?></h4>
             <form action='<?= $url ?>' method="POST">
                <input type='number' name='nombre' <?php if($value==="Youpi !!") echo "hidden";?>>
                <div><input type='submit' value="<?= $values ?>"><input type='button' value="<?= $value ?>" style="color:<?= $color?>" <?php if($value==="Youpi !!") echo "hidden" ?>></div>
             </form>
             <marquee behavior="alternate"><div class="texte">NOMBRE MYSTERE</div></marquee>
             <marquee behavior="scroll"><div class="texte jolie" <?php if($value==="Youpi !!") echo "hidden";?>><?php affiche() ;?></div></marquee>
          </div>
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