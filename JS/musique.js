num=0 ;
      musiques="";

       var fichierBrut = new XMLHttpRequest();
       fichierBrut.open("GET",'../donnee/Musique.txt', false);
       fichierBrut.onreadystatechange = function (){
      if(fichierBrut.readyState === 4){
         if(fichierBrut.status === 200 || fichierBrut.status == 0)
         {
            var texteComplet = fichierBrut.responseText;
             musiques = texteComplet.split("\n");
         }
         }
   }
     fichierBrut.send(null);

    function next(){
      var element = document.getElementById("musique") ;
     num++ ;
      if(num>=musiques.length)
         num=1 ;
    element.src="../Audio/"+musiques[num] ;
    var sons=element.getAttribute("src").split("/") ;
    document.querySelector("marquee span").innerHTML=(sons[2]) ;
    actuel(num) ;
    }

    function prev(){
        var element = document.getElementById("musique") ;
        num-- ;
      if(num<0)
         num=musiques.length-1 ;
    element.src="../Audio/"+musiques[num] ;
    var sons=element.getAttribute("src").split("/") ;
    document.querySelector("marquee span").innerHTML=(sons[2]) ;
    actuel(num) ;
    }

    function choix(n)
    {
      var element=document.getElementById(n) ;
      document.getElementById("musique").src="../Audio/"+element.getAttribute("name") ;
      document.getElementById("title").innerText=element.getAttribute("name") ;
      num=n ;
      actuel(n) ;
   }

   function actuel(n)
      {
         for(var i of document.getElementsByClassName("title")){
         if(i.getAttribute("class").split(" ")[1]==n){
            document.getElementsByClassName(n)[0].style.opacity="0.6" ;
         }else{
            document.getElementsByClassName(i.getAttribute("class").split(" ")[1])[0].style.opacity="1" ;
         }
         }
      }