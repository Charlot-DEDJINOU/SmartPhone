<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Stylegenerale.css">
    <link rel="stylesheet" href="../CSS/apple.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
    <script type="text/javascript">
        choix=1 ;
       images="" ;
       var fichierBrut = new XMLHttpRequest();
       fichierBrut.open("GET",'../donnee/galerie.txt', false);
       fichierBrut.onreadystatechange = function (){
      if(fichierBrut.readyState === 4){
         if(fichierBrut.status === 200 || fichierBrut.status == 0)
         {
            var texteComplet = fichierBrut.responseText;
             images = texteComplet.split("\n");
         }
         }
   }
     fichierBrut.send(null);

       setInterval("Caroselle()",3000) ;

       function Caroselle(){
        element = document.getElementById("slider") ;
        element.src="../imagehtml/"+images[choix]; ;
        choix++ ;
       if(choix==15 || choix==31)
          choix++ ;
       if(choix===images.length)
          choix=1 ;
       }
    </script>

    <?php 
        if(!empty($_POST["email"]) && !empty($_POST["message"]) && count($_POST)!==0)
        {
            $message=json_encode(
                [
                "email"=>$_POST["email"],
                "message"=>$_POST["message"],
                "date"=>date('d F Y  H:i:s')
                ]
                ) ;
                file_put_contents("../donnee/messages.txt",$message.PHP_EOL,FILE_APPEND) ;
        }

        class Message {
            public $email ;
            public $message;
            public $date ;
            function __construct(string $email,string $message,string $date)
            {
                $this->email=$email ;
                $this->message=$message ;
                $this->date=$date ;
            } 
        }

        function commentaires(){
            $commentaires=fopen("../donnee/messages.txt","r") ;
            while($commentaire=fgets($commentaires)){
                 $commentaire=json_decode($commentaire,true) ;
                 $messages[] = new Message($commentaire['email'],$commentaire['message'],$commentaire['date']) ;
            }
            fclose($commentaires) ;
            $messages = array_reverse($messages) ;
            foreach($messages as $message){
                $email =htmlentities($message->email) ;
                $date =htmlentities($message->date) ;
                $texte =htmlentities($message->message) ;
                 echo "<div class='commentaire'>
                 <div class='email-date'><span class='gmail'>$email</span><span class='date'><i>$date</i></span></div>
                 <p>$texte</p>
              </div>" ;
            }
        }
    ?>
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
           <span class="produits">Nos Produits</span>
           <div class="image"><img src="../imagehtml/bouquet-rose-rouge-et-petiti-fleur-.png" id="slider"></div>
           <section class="section-commentaire">
                <span>Commentaires</span>
                    <form action="" method="POST">
                         <div class="soumission"><input type="email" placeholder="example@gmail.com" required name="email">
                         <input type="submit"></div>
                         <textarea minlength="3" required placeholder="Votre commentaire" name="message"></textarea>
                    </form>
                    <div class="commentaires">
                        <?php commentaires() ; ?>
                    </div>
           </section>
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