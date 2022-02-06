function checknome(obj){
    const classNome = document.forms["nuovoutente"]["nome"];
     if(obj.value.length>30){
        classNome.setAttribute("class", "form-control bg-danger bg-opacity-25");
        document.getElementById("label_nome").innerHTML = "<i class=\"fas fa-exclamation-circle\"></i>  Nome (inserire un nome più breve):";
        document.getElementById("label_nome").setAttribute("class", "col-sm-2 col-form-label text-danger");
    } else {
        classNome.setAttribute("class", "form-control");
        document.getElementById("label_nome").innerHTML = "Nome:";
        document.getElementById("label_nome").setAttribute("class", "col-sm-2 col-form-label");
    }
}

function checkcognome(obj){
    const classCognome = document.forms["nuovoutente"]["cognome"];
     if(obj.value.length>30){
        classCognome.setAttribute("class", "form-control bg-danger bg-opacity-25");
        document.getElementById("label_cognome").innerHTML = "<i class=\"fas fa-exclamation-circle\"></i>  Cognome (inserire un cognome più breve):";
        document.getElementById("label_cognome").setAttribute("class", "col-sm-2 col-form-label text-danger");
    } else {
        classCognome.setAttribute("class", "form-control");
        document.getElementById("label_cognome").innerHTML = "Cognome:";
        document.getElementById("label_cognome").setAttribute("class", "col-sm-2 col-form-label");
    }
}

function checkemail(obj){
    /*if (obj.value==="ao!"){
        alert();
    }*/
    const classEmail = document.forms["nuovoutente"]["email"];
    const email_valida = /\S+@\S+\.\S+/;
    if (email_valida.test(obj.value)===false){
        classEmail.setAttribute("class", "form-control bg-danger bg-opacity-25");
        document.getElementById("label_email").innerHTML = "<i class=\"fas fa-exclamation-circle\"></i>  Email (Inserire una email valida):";
        document.getElementById("label_email").setAttribute("class", "col-sm-2 col-form-label text-danger");
    } else {
        classEmail.setAttribute("class", "form-control");
        document.getElementById("label_email").innerHTML = "Email:";
        document.getElementById("label_email").setAttribute("class", "col-sm-2 col-form-label");
    }
}

function checkdata(obj){
    const classData = document.forms["nuovoutente"]["datadinascita"];
    const data = new Date();
    if (Date.parse(obj.value) > data){
        classData.setAttribute("class", "form-control bg-danger bg-opacity-25");
        document.getElementById("label_data").innerHTML = "<i class=\"fas fa-exclamation-circle\"></i> Data di nascita (l'utente inserito non può non essere ancora nato):";
        document.getElementById("label_data").setAttribute("class", "col-sm-2 col-form-label text-danger");
    }
    else {
        classData.setAttribute("class", "form-control");
        document.getElementById("label_data").innerHTML = "Data di nascita:";
        document.getElementById("label_data").setAttribute("class", "col-sm-2 col-form-label");
    }
}

function checknomesala(obj){
    const classNomesala = document.forms["nuovasala"]["nome"];
    if(obj.value.length>30){
        classNomesala.setAttribute("class", "form-control bg-danger bg-opacity-25");
        document.getElementById("label_nomesala").innerHTML = "<i class=\"fas fa-exclamation-circle\"></i>  Nome sala (inserire un nome più breve):";
        document.getElementById("label_nomesala").setAttribute("class", "col-sm-2 col-form-label text-danger");
    } else {
        classNomesala.setAttribute("class", "form-control");
        document.getElementById("label_nomesala").innerHTML = "Nome:";
        document.getElementById("label_nomesala").setAttribute("class", "col-sm-2 col-form-label");
    }
}