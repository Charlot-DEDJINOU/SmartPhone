function initElement()
      {
        var p = document.getElementsByTagName("a");
        for(var i of p){
          i.onclick=showAlert;
        }
      };
      function showAlert()
      {
        alert("Vous n\'avez aucun abonnement actif");
      }