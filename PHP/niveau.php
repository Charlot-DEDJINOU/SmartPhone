<?php if(isset($_POST['niveau'])){
    if($_POST['niveau']=='Facile')
         file_put_contents('../donnee/nombre.txt',rand(1,100));
    else if($_POST['niveau']=='Normal')
         file_put_contents('../donnee/nombre.txt',rand(1,1000));
    else if($_POST['niveau']=='Difficile')
         file_put_contents('../donnee/nombre.txt',rand(1,10000));
    else
         file_put_contents('../donnee/nombre.txt',rand(1,100000));
    file_put_contents('../donnee/total.txt',''.PHP_EOL) ;
    require_once('debutjeu.php') ;
}else{
    $texte="Veuillez choisir un niveau" ;
    require_once('menujeu.php') ;
}
?>
