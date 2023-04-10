i=0 ;

function face(){
    var animate=document.getElementsByTagName("button")[0] ;
    animate.removeAttribute("style");
}

function refresh(){
    var animate=document.getElementsByTagName("button")[0] ;
    animate.style.animationName="tourne" ;

    var taches=document.getElementsByClassName("tache") ;
    for(var j=0 ; j<taches.length ; j++){
        let id=taches[j].getAttribute("class").split(" ")[1] ;
        var span=document.getElementById(id).getAttribute("style") ;
        if(span){
            document.getElementById("ajouter").removeChild(taches[j]) ;
            j--;
        }
    }
}

function deleter(n){
     let element= document.getElementsByClassName(n) ;
     let elements=document.getElementById("ajouter") ;
     elements.removeChild(element[0]) ;
     face() ;
}

function barrer(n){
    var rond=document.getElementById("case"+n) ;
    var element=document.getElementById(n) ;
    var span=element.getAttribute("style") ;
    if(!span){
        element.style.textDecorationLine="line-through" ;
        element.style.opacity="0.5" ; 
        rond.style.backgroundColor="green" ;
    }else{
        element.removeAttribute("style") ;
        rond.removeAttribute("style");
    }
    face() ;
}

 function ajouter()
 {
    var text=document.getElementById("input").value ;
    if(text){
        i++ ;
        let elements=document.getElementById("ajouter") ;
        let element=document.createElement("div") ;
        elements.appendChild(element) ;
        element.className=("tache "+i) ;
        element.innerHTML=("<div class='nom'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' id='case"+i+"' onclick='barrer("+i+")' fill='currentColor' class='bi bi-check' viewBox='0 0 16 16'><path d='M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z'/></svg><span id="+i+">"+text+"</span></div><button class='sup' onclick='deleter("+i+")'><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'><path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/></svg></button>");
    }
    document.getElementById("input").value="";
    face() ;
 }

 function dater()
 {
    var jour=["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"] ;
    var mois=["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Decembre"] ;
    var date= new Date() ;
    date=jour[date.getDay()]+" "+Date().split(" ")[2]+" "+mois[date.getMonth()] ;
    document.getElementById("date").innerText=(date)
 }