//recuperation des elements
    const form= document.querySelector("#form");
    const profil = document.querySelector("#profil");
    const username = document.querySelector("#username");
    const userlastname = document.querySelector("#userlastname");
    const email = document.querySelector("#email");
    const adresse = document.querySelector("#adress");
    const date = document.querySelector("#date");
    const password = document.querySelector("#password");
    const password2 = document.querySelector("#password2");
   
    //evenements(les evenements et gerer les fonctions)
    form.addEventListener('click',e=>{//verifie tout les erreurs
        e.preventDefault();  
        
       form_verify();
    })
    function form_verify(){
        //obtenir tout les valeurs des inputs
        const profilValue = profil.value.trim();
        const userValue = username.value.trim();
        const userlastValue = userlastname.value.trim();
        const emailValue = email.value.trim();
        const adresseValue = adresse.value.trim();
        const dateValue = date.value.trim();
        const passValue = password.value.trim();
        const pass2Value = password2.value.trim();
      //profil
       if (profilValue !== "") {
        setSuccess(profil)
        }

        //username verify
        if(userValue === "") {
        let message ="Le nom ne peut pas etre vide";
        setError(username,message);
        }else if(!userValue.match(/^[a-zA-Z]/)){ 
        let message ="Nom doit commencer par une lettre";
        setError(username,message)
        }else{
            let letterName = userValue.length;
            if(letterName < 3) {
                let message = "Le nom doit avoir aux moins 3 caracteres";
                setError(username,message)
            }else{
                setSuccess(username);
            }
        }
    
    //userlastname verify
        if(userlastValue  === "") {
        let message ="Prenom ne peut pas etre vide";
        setError(userlastname,message);
        }else if(!userlastValue.match(/^[a-zA-Z]/)){ 
            let message ="Nom doit commencer par une lettre";
            setError(userlastname,message)
        }else{
           let letterName = userlastValue.length;
           if(letterName < 3) {
                let message = "Le nom doit avoir aux moins 3 caracteres";
                setError(username,message)
            }else{
                setSuccess(userlastname);
        }
        }

     //email verify
        if (emailValue === "") {
            let message ="Email ne peut etre vide";
             setError(email,message);
         }else if(!email_verify(emailValue)) {
             let message = "email non valide";
             setError(email,message);
         }else{
             setSuccess(email)
         }
        
        //Adresse verify
        if (adresseValue === "") {
            let message ="Email ne peut etre vide";
             setError(adresse,message);
        }else{
            setSuccess(adresse)
        }
        //date naissance(non verifier)
        if (dateValue !== "") {
            setSuccess(date)
        }
     //password
        if(passValue ===""){
            let message = "Mot de passe ne peut pas etre vide";
            setError(password,message)
          }else if(!password_verify(passValue)){
            let message = "Mot de passe doit avoir aux moins 5 à 8 caracteres";
            setError(password,message)
          }else{
              setSuccess(password);
          }
          
     //password2 confirm
         if (pass2Value===""){
            let message ="Mot de passe ne peut pas etre vide";
            setError(password2,message);
          }else if(passValue !== pass2Value){
            let message ="Mot de passe invalide";
            setError(password2,message);
          }else{
              setSuccess(password2)
          }
        

 }
function setError(elem,message){
        const formControl = elem.parentElement;
        const small = formControl.querySelector('small');

        //ajoute l'erreur
        small.innerText = message
        //ajout class erreur
        formControl.className = "form-control error";
}
function setSuccess(elem) {
        const formControl = elem.parentElement;
        formControl.className ="form-control success"
}
function email_verify(email){
    return /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/.test(email);
}
function password_verify(password)
{
   return /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,8}$/.test(password);
}
