<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/stylegenerale.css">
    <link rel="stylesheet" href="../CSS/WhatsapP.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
    <script type="text/javascript"></script>
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
            <div class="whatsapp-header">
                 <div class="Whatsapp">
                        <span>Whatsapp</span>
                        <div class="icones">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg>
                       </div>
                 </div>
                 <div class="option">
                      <span class="actuel">DISC</span>
                      <span>STATUT</span>
                      <span>APPELS</span>
                 </div>
            </div>
            <section class="messages">
               <?php 
                    try
                        {
                        $bd = new PDO('mysql:host=localhost;dbname=gestion', 'root', 'Charlot1xbet@2003',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        }
                    catch (Exception $e)
                        {
                        die('Erreur : ' . $e->getMessage());
                        } 
                        $datas=$bd->query("SELECT * FROM usersWhatsapp ORDER BY `date_dernier_message` DESC ") ;
                        foreach ($datas as $data)
                        { 
                            if ($data['dernier_message_est_moi'])
                            {
                                echo "<a href='discussion.php?id=$data[id]' class='message' id=$data[id]>
                                <img src='../imagehtml/$data[nom_photo]'>
                                <div class='nom-message'>
                                    <span class='nom'>$data[nom]</span>
                                    <span class='sms'>$data[dernier_message]</span>
                                </div>
                                <div class='date-number'>
                                    <span >$data[heure_dernier_message]</span>
                                    <span>&#x2713;&#x2713;</span>
                                </div>
                                </a>" ;
                            }
                            else
                            {
                                    echo "<a href='discussion.php?id=$data[id]' class='message' id=$data[id]>
                                <img src='../imagehtml/$data[nom_photo]'>
                                <div class='nom-message'>
                                    <span class='nom'>$data[nom]</span>
                                    <span class='sms'>$data[dernier_message]</span>
                                </div>
                                <div class='date-number'>
                                    <span class='date'>$data[heure_dernier_message]</span>
                                    <span class='number'>$data[nombre_message]</span>
                                </div>
                                </a>" ;
                            }
                        }
               ?>
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

               