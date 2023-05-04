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