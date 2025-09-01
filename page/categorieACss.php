<style>
*,
::before
::after{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body{
    background:#232429;
    overflow-y: scroll;
}
#contenu{
    width: 90%;
    height: 80vh;
    position: fixed;
    background-color:rgb(84, 192, 147);
    border-radius: 29px;
    display: flex;
    margin-left: 5%;
    margin: 5% 5% 0% 5%;
}
#logo{
    font-size: x-large;
    font-style: italic;
    font-weight: 500;
    color: white;
    margin-left: 25%;

}

#slogan{
    margin-left:5%;
    margin-top: 3%;
    border-radius: 29px;
}
#navbar ul{
    position: relative;
    float:right;
    margin-left: -10vw;
    list-style: none;

}
#navbar ul li{
    display: inline-block;
   line-height: 50px;
   margin: -6px 20px;
}

#navbar li a{
    text-decoration: none;
    color: white;
    font-weight: 400;
    font-size: 20px;
    font-style: italic;
    
}
#navbar ul li a:hover{
    color:orangered;
    text-decoration: none;
    font-weight: 600;
    font-size: 20px;
    padding: 6px 18px;
    border-radius: 50px;
    background: white;
    transition: 0.5s;
}
img#panier{
    position: relative;
    margin: 2px;
    margin-left: 20px;
}
#tongasoa{
    position: absolute;
    color: black;
    font-size: 45px;
    margin-top: 190px;
    margin-left: 50%;
}

#style{
    position: relative;
    display: flex;
    left:45%;
    top:130px;
    background-size:cover;
    box-shadow: 10px 10px 10px 10px;
    width: 650px;
    height: 450px;
    overflow: auto;
   
}
#partie1, #partie2{
    position:relative;
    display:block;
}
/* les boutons actions*/
#partie3 ul{
    font-size: 20px;
    list-style: none;
    position: fixed;
    margin-top:120px;
}
#partie3 ul li{
    display: block;
    line-height: 50px;
    margin-bottom: 20px;
    margin-left:25%;
}
#partie3 li a{
    text-decoration: none;
    color: black;
    font-weight: 500;
    font-size: 22px;
    font-weight: 700;
    padding: 8px 20px;
    border-radius: 50px;
    background: white;
    transition: 0.3s;
    
}
a#btn_ajouter:hover{
    background: green;
}
a#btn_affiche:hover{
    background:yellow;
}
a#btn_modifie:hover{
    background:darkblue;
}
a#btn_supprime:hover{
    background:red;
}
li a.supprimer{
    margin-left:-15px;
}
#t-shirt, #Robe, #Pull, #jupe, #particulier, #kiraro{
    position: relative;
    padding-top:10px;
   /*background-color: green;*/
    width: 150px;
    height: 210px;
    flex-basis: 15%;
    margin-left: 45px;
    margin-bottom:25px;
    border-radius:10px;
    cursor: pointer;
}
#style p{
    margin:10px 45px;
    font-size:20px;
    font-weight:bold;
}
#style p#pantalon{
    margin:5px 20px;
    font-size:18px;
}
#style p#chaussure{
    margin:5px 19px;
}

#sary{
    background-color: white;
    height: 160px;
}
/* Bouton pour fermer la modale */
.close {
   position:fixed;
   color: white;
   top:110px;
   left:89%;
   font-size: 40px;
}
.close:hover,
.close:focus {
    color:red;
    text-decoration: none;
    cursor: pointer;
}


</style>