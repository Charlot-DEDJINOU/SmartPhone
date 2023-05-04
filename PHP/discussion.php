<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/stylegenerale.css">
    <link rel="stylesheet" href="../CSS/Discussion.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
    <script type="text/javascript" src="../JS/discussion.js"></script>
</head>
<?php 
    $id=$_GET['id'] ;
    try
        {
        $bd = new PDO('mysql:host=localhost;dbname=gestion', 'root', 'Charlot1xbet@2003',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
    catch (Exception $e)
        {
        die('Erreur : ' . $e->getMessage());
        } 
        $data=$bd->query("SELECT * FROM usersWhatsapp WHERE id='$id' ") ;

        $data=$data->fetch() ;
        $name=$data['nom'] ;

        class Message {
            public $type ;
            public $message;
            public $heure ;
            function __construct(string $type,string $message,string $heure)
            {
                $this->type=$type ;
                $this->message=$message ;
                $this->heure=$heure ;
            } 
        }

        function messages($name)
        {
            if(file_exists("../donnee/UsersWhatsapp/$name.txt"))
            {
                $messages_fichier=fopen("../donnee/UsersWhatsapp/$name.txt","r") ;
                if($messages_fichier != "")
                {
                    while($message=fgets($messages_fichier)){
                        $message=json_decode($message,true) ;
                        $Messages[] = new Message($message['type'],$message['message'],$message['heure']) ;
                }
                fclose($messages_fichier) ;
                }
            }
            
            if(isset($Messages))
            {
                foreach($Messages as $Message){
                    $type =htmlentities($Message->type) ;
                    $message =htmlentities($Message->message) ;
                    $heure =htmlentities($Message->heure) ;
                    if($type == 'D')
                    {
                        echo "<div class='message destination'><span class='message-compose'>$message</span><span class='heure'>$heure</span></div>" ;
                    }
                    else
                    {
                        echo "<div class='message reception'><span class='message-compose'>$message</span><span class='heure'>$heure</span></div>" ;
                    }
            }
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
            <div class="hearder-discussion">
                <a href='' class='message' id=<?= $id ?>>
                    <img src='../imagehtml/<?= $data['nom_photo'] ?>'>
                    <div class='nom-message'>
                        <span class='nom'><?= $data['nom'] ?></span>
                        <span class='sms'><?= $data['heure_dernier_message'] ?></span>
                    </div>
                </a>
                <a href="" class="icone"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-camera-reels" viewBox="0 0 16 16"><path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"/><path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z"/><path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/></svg></a>
                <a href="" class="icone"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg></a>
                <a href="" class="icone"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg></a>
            </div>
            <div class="body-discussion">
                <a href="" class="condition">
                    Les messages et les appels sont chiffrés de bout en bout.Aucun tiers, pas même whatsapp, ne peut les lire ou les écouter.Appuyer pour en savoir plus
                </a>
                <?php messages($name) ?>
                
            </div>
            <form method="POST" class="message-send">
                <textarea id="text"></textarea>
                <div class="buttons">
                    <button onclick="send('D');" type="button">D</button>
                    <button onclick="send('R');" type="button">R</button>
                </div>
            </form>
          </div>
          <div class="footer">
               <a href="whatsapp.php"><input type="button" class="footer-rond"></a>
               <span>Retour</span>
          </div>
        </div>
        <div class="end"></div>
    </div>
</div>
</body>
</html>

               