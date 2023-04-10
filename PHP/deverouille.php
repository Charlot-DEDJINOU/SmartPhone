<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Deverouillle.css">
    <link rel="stylesheet" href="../CSS/Stylegenerale.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
</head>
    <script type="text/javascript">
     function initelement(n){
         var temp ;
         var element=document.getElementById("champ") ;
         temp=element.value ;
         element.value=temp+n ;
      }
    </script>

<?php 
$texte='Saisir votre mot de passe' ;
$url="deverouille.php" ;
$value="" ;
if(isset($_POST['momo'])){
   if($_POST['momo']==""){
      $texte='Saisir votre mot de passe' ;
   }
   elseif($_POST['momo']!="17072003"){
     $texte="<span style='color:red'>Mot de passse incorrect</span>" ;
     $url="deverouille.php" ;}
   else{
     $url='ecran.php' ;
     $texte="<span style='color:green'>Mot de passe correct</span>" ;
     $value="Cliquer sur OK" ;}
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
            <p><?php echo $texte ?></p>
            <form action="<?php echo $url ?>" method="POST" enctype="application/x-www-form-urlencoded">
               <input type="password" name="momo" placeholder="<?php echo $value ?>" value="" id="champ">
                <a href='<?php echo $url ?>' class="form-a"><input type="submit" value="OK"></a>
            </form>
            <div class="touche">
                  <button class="touche-items" onclick="initelement('1');">
                       <span class="chiffre">1</span>
                       <span class="letter"></span>
                  </button>
                  <button class="touche-items" onclick="initelement('2');">
                     <span class="chiffre">2</span>
                     <span class="letter">ABC</span>
                  </button>
                <button class="touche-items" onclick="initelement('3');">
                  <span class="chiffre">3</span>
                  <span class="letter">DEF</span>
                </button>
                <button class="touche-items" onclick="initelement('4');">
                  <span class="chiffre">4</span>
                  <span class="letter">GHI</span>
                </button>
                <button class="touche-items" onclick="initelement('5');">
                   <span class="chiffre">5</span>
                   <span class="letter">JKL</span>
                </button>
                 <button class="touche-items" onclick="initelement('6');">
                   <span class="chiffre">6</span>
                    <span class="letter">MNO</span>
                 </button>
                 <button class="touche-items" onclick="initelement('7');">
                   <span class="chiffre">7</span>
                    <span class="letter">PQRS</span>
                 </button>
                <button class="touche-items" onclick="initelement('8');">
                    <span class="chiffre">8</span>
                    <span class="letter">TUV</span>
                </button>
                <button class="touche-items" onclick="initelement('9');">
                     <span class="chiffre">9</span>
                      <span class="letter">WXYZ</span>
                </button>
                <button class="touche-items" onclick="initelement('0');">
                  <span class="chiffre">0</span>
                  <span class="letter"></span>
                </button>
          </div>
          </div>
          <div class="footer">
               <a href='smartphoneV2.php'><input type='button' class='footer-rond'></a>
               <span>Retour</span>
          </div>
        </div>
        <div class="end"></div>
    </div>
</div>
</body>
</html>