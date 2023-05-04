function send(type)
{
    
    var element = document.getElementById('text') ;
    var text = element.value ;
    element.value="" ;
    if (text !== "")
    {
        var hours,minutes ;
        var elements=document.getElementsByClassName("body-discussion")[0] ;
        element = document.createElement("div") ;
        elements.appendChild(element) ;

        var date= new Date() ;
        if (date.getHours()/10 < 1.0) 
            hours = "0"+date.getHours() ;
        else
            hours=date.getHours() ;
        if (date.getMinutes()/10 < 1.0) 
            minutes = "0"+date.getMinutes() ;
        else 
            minutes=date.getMinutes() ;

        if(type == 'D')
            element.className=("message destination") ;
        else 
            element.className=("message reception") ;
        
        var id = document.getElementsByClassName("message")[0].id ;
        var heure=hours+":"+minutes 

        var requete = new XMLHttpRequest();
        requete.open("GET","fonctionWhatsapp.php?id="+id+"&type="+type+"&message="+text+"&heure="+heure, false);
        requete.onreadystatechange = function (){
        if(requete.readyState === 4)
            {
                if(requete.status === 200 || requete.status == 0)
                    console.log(requete.responseText) ;                    }
    }
        requete.send(null);

        element.innerHTML=("<span class='message-compose'>"+text+"</span><span class='heure'>"+hours+":"+minutes+"</span>") ;
        elements.scrollTop=elements.scrollHeight ;
    }

    return false ;
}

function Initelement()
{
    var elements=document.getElementsByClassName("body-discussion")[0] ;
    elements.scrollTop=elements.scrollHeight ;
}