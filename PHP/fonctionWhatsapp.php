<?php
    if(!empty($_GET["heure"]))
        {
            $id= $_GET['id'] ;
            $heure= $_GET['heure'] ;
            $message= $_GET['message'] ;
            $type= $_GET['type'] ;

            try
            {
                $bd = new PDO('mysql:host=localhost;dbname=gestion', 'root', 'Charlot1xbet@2003',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch (Exception $e)
            {
                die('Erreur : ' . $e->getMessage());
            } 

            $bd->exec("UPDATE userswhatsapp SET heure_dernier_message='$heure' WHERE id=$id") ;
            $bd->exec("UPDATE userswhatsapp SET dernier_message='$message' WHERE id=$id") ;
            $bd->exec("UPDATE userswhatsapp SET `date_dernier_message`=NOW() WHERE id=$id") ;

            $data=json_encode(
                [
                    "type" => $_GET['type'] ,
                    "message" =>  $message,
                    "heure" =>  $heure
                ]
            ) ;

            $name=$bd->query("SELECT nom FROM usersWhatsapp WHERE id=$id ") ;
            $name=$name->fetch()['nom'] ;

            file_put_contents("../donnee/UsersWhatsapp/$name.txt",$data.PHP_EOL,FILE_APPEND) ;

            if($type == 'D')
                {
                    $bd->exec("UPDATE userswhatsapp SET nombre_message=0 WHERE id=$id ") ;
                    $bd->exec("UPDATE userswhatsapp SET dernier_message_est_moi=1 WHERE id=$id ") ;
                }
            else
                {
                    $ancien_nombres_message = $bd->query("SELECT nombre_message FROM userswhatsapp WHERE id=$id") ;
                    $ancien_nombres_message=$ancien_nombres_message->fetch()['nombre_message'] + 1 ;

                    $bd->exec("UPDATE userswhatsapp SET nombre_message=$ancien_nombres_message WHERE id=$id") ;
                    $bd->exec("UPDATE userswhatsapp SET dernier_message_est_moi=0 WHERE id=$id ") ;
                }
        }

        return "momomo" ;
?>