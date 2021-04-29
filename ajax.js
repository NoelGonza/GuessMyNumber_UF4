function cambia(str) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("tablas").innerHTML = this.responseText;
      }
    };
    request.open("GET","llamada.php?eleccion="+str,true);
    request.send();
}

function elimina(str) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("tablas").innerHTML = this.responseText;
      }
    };
    request.open("GET","llamada.php?elimina="+str,true);
    request.send();
}

function getFormData(formId){
  var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("tablas").innerHTML = this.responseText;
      }
    };
    let formValues = {};
    var form1Inputs = document.forms[formId].getElementsByTagName("input");
    for(let i=0; i<form1Inputs.length; i++){
          formValues[form1Inputs[i].name]=form1Inputs[i].value;
    }
    let modalitat = document.getElementById("modalitat").value;//formValues["modalitat"];
    let nivell = document.getElementById("nivel").value;//formValues["nivell"];
    let intents = formValues["intents"];
    request.open("GET","llamada.php?modalitat="+modalitat+"&nivell="+nivell+"&intents="+intents,true);
    request.send();
}

function modifica(str) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("form").innerHTML = this.responseText;
      }
    };
    request.open("GET","llamada.php?modifica="+str,true);
    request.send();
}

function modifica_fin(formId){
  var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("tablas").innerHTML = this.responseText;
      }
    };
    let formValues = {};
    var form1Inputs = document.forms["form1"].getElementsByTagName("input");
    for(let i=0; i<form1Inputs.length; i++){
          formValues[form1Inputs[i].name]=form1Inputs[i].value;
    }
    let modalitat = document.getElementById("modalitat").value;//formValues["modalitat"];
    let nivell = document.getElementById("nivel").value;//formValues["nivell"];
    let intents = formValues["intents"]
    let id2 = formValues["id"];
    request.open("GET","llamada.php?modalitat2="+modalitat+"&nivell2="+nivell+"&intents2="+intents+"&id2="+id2,true);
    request.send();
}