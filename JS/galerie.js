num=0 ;
images="";
function charlot(){
   var element = document.getElementById("slider") ;
   num=element.getAttribute("name") ;
}

 var fichierBrut = new XMLHttpRequest();
 fichierBrut.open("GET",'../Donnee/galerie.txt', false);
 fichierBrut.onreadystatechange = function (){
if(fichierBrut.readyState === 4){
   if(fichierBrut.status === 200 || fichierBrut.status == 0)
   {
      var texteComplet = fichierBrut.responseText;
       images =texteComplet.split("\n");
   }
   }
}
fichierBrut.send(null);

function next(){
var element = document.getElementById("slider") ;
num++ ;
if(num==0 || num==26 || num==49)
   num++;
if(num>=images.length)
   num=1 ;
element.style.backgroundImage="url(../imagehtml/"+images[num]+")" ;
}

function prev(){
  var element = document.getElementById("slider") ;
  num-- ;
if(num==0 || num==26 || num==49)
   num--;
if(num<0)
   num=images.length-1 ;
element.style.backgroundImage="url(../imagehtml/"+images[num]+")" ;
}