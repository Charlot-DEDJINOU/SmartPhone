<?php
   function ajouter(string $nom,string $reste): bool
   {
    try
        {
        $bd = new PDO('mysql:host=localhost;dbname=gestion', 'root', 'Charlot1xbet@2003',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
    catch (Exception $e)
        {
        die('Erreur : ' . $e->getMessage());
        }
        $nouveau = $bd->prepare("INSERT INTO achat (nom,montant,dates) VALUES (:nom,:reste,:dates)");
        $nouveau->execute(array("nom"=>$nom,"reste"=>$reste,"dates"=>date('Y-m-j h-i-s'))) ;

        $trouver = $bd->prepare("SELECT * FROM credit WHERE nom=:nom") ;
        $trouver->execute(array("nom"=>$nom)) ;

        if($ancien=$trouver->fetch()){
            $ancien = $ancien["reste"] ;
            $bd->exec("UPDATE credit SET reste=$ancien+$reste WHERE nom='$nom'") ;
            return false ;
        }
        else{
            $nouveau = $bd->prepare("INSERT INTO credit (nom,reste) VALUES (:nom,:reste)");
            $nouveau->execute(array("nom"=>$nom,"reste"=>$reste)) ;
            return true ;
        }
   }

   function lister() {
    try
        {
            $bd = new PDO('mysql:host=localhost;dbname=gestion', 'root', 'Charlot1xbet@2003',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
    catch (Exception $e)
        {
        die('Erreur : ' . $e->getMessage());
        }
      $reponses = $bd->query("SELECT * FROM credit") ;
      while($reponse=$reponses->fetch()){
        echo "<div><span class='nom'>$reponse[nom]</span> <span class='reste'>$reponse[reste] fcfa</span></div>" ;
      }
   }

   function payer(string $nom,string $payer): bool
   {
    try
        {
            $bd = new PDO('mysql:host=localhost;dbname=gestion', 'root', 'Charlot1xbet@2003',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
    catch (Exception $e)
        {
        die('Erreur : ' . $e->getMessage());
        }
        $nouveau = $bd->prepare("INSERT INTO achat (nom,montant,dates) VALUES (:nom,-:reste,:dates)");
        $nouveau->execute(array("nom"=>$nom,"reste"=>$payer,"dates"=>date('Y-m-j h-i-s'))) ;

        $trouver = $bd->prepare("SELECT * FROM credit WHERE nom=:nom") ;
        $trouver->execute(array("nom"=>$nom)) ;

        if($ancien=$trouver->fetch()){
            $ancien = $ancien["reste"] ;
            $bd->exec("UPDATE credit SET reste=$ancien-$payer WHERE nom='$nom'") ;
            return false ;
        }
        else{
            $nouveau = $bd->prepare("INSERT INTO credit (nom,reste) VALUES (:nom,-:reste)");
            $nouveau->execute(array("nom"=>$nom,"reste"=>$payer)) ;
            return true ;
        }
   }

   function rechercher(string $nom): array
   {
    try
        {
            $bd = new PDO('mysql:host=localhost;dbname=gestion', 'root', 'Charlot1xbet@2003',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
    catch (Exception $e)
        {
        die('Erreur : ' . $e->getMessage());
        }
        $array=[] ;
        $trouver = $bd->prepare("SELECT * FROM achat WHERE nom=:nom") ;
        $trouver->execute(array("nom"=>$nom)) ;
        if(!empty($trouver)){
            while($reponse=$trouver->fetch())
                 $array[]="<div>$reponse[nom] $reponse[montant] fcfa $reponse[dates]</div>" ;

            $trouver= $bd->query("SELECT * FROM credit WHERE nom='$nom'") ;
            $trouver = $trouver->fetch() ;
            if(!empty($trouver) && $trouver["reste"]==0){
            $trouver = $bd->prepare("DELETE FROM achat WHERE nom=:nom") ;
            $trouver->execute(array("nom"=>$nom)) ;
            }
            return $array ;
        }
        else{
            $trouver= $bd->query("SELECT * FROM credit WHERE nom='$nom'") ;
            $trouver = $trouver->fetch() ;
            if($trouver["reste"]==0){
            $trouver = $bd->prepare("DELETE FROM achat WHERE nom=:nom") ;
            $trouver->execute(array("nom"=>$nom)) ;
        }
            return $array;
        }
   }

   function sommer():string
   {
    try
        {
            $bd = new PDO('mysql:host=localhost;dbname=gestion', 'root', 'Charlot1xbet@2003',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
    catch (Exception $e)
        {
        die('Erreur : ' . $e->getMessage());
        }
      $somme=$bd->query("SELECT SUM(reste) FROM credit") ;
      $somme = $somme->fetch() ;
      return $somme[0] ?? 0 ;
   }

?>