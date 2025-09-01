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
.contenu{
    width: 90%;
    height: 80vh;
    position: fixed;
    background-color:rgb(84, 192, 147);
    border-radius: 29px;
    display: flex;
    margin-left: 5%;
    margin: 5% 5% 0% 5%;
}
.logo{
    font-size: x-large;
    font-style: italic;
    font-weight: 700;
    color: white;
    margin-left: 25%;

}

.slogan{
    margin-left:5%;
    margin-top: 3%;
    border-radius: 29px;
}
.navbar ul{
    position: relative;
    float:left;
    margin-left:-10vw;
    list-style: none;

}
.navbar ul li{
    display: inline-block;
   line-height: 50px;
   margin: -9px 10px;
}

.navbar li a{
    text-decoration: none;
    color: white;
    font-weight: 500;
    font-size: 22px;
    font-style: italic;
    
}
.navbar ul li a:hover{
    color:orangered;
    text-decoration: none;
    font-weight: 700;
    font-size: 20px;
    padding: 8px 20px;
    border-radius: 50px;
    background: white;
    transition: 0.3s;
}
/*img.panier{
    position: relative;
    margin: -38px;
    margin-left: 20px;
}*/
button[type="submit"]
{
    border:none;
    
    outline: none;
    height:80px;
    background:none;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
}
.bienvenu{
    position: absolute;
    color: black;
    font-size: 45px;
    margin-top: 190px;
    margin-left: 50%;
}

.style{
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
.partie1, .partie2{
    position:relative;
    display:block;
}
.t-shirt, .Robe, .Pull, .jupe, .particulier, .kiraro{
    position: relative;
    padding-top:10px;
  /*  background-color: green;*/
    width: 150px;
    height: 200px;
    flex-basis: 15%;
    margin-left: 45px;
    margin-bottom:25px;
    border-radius:10px;
    cursor: pointer;
}
.style p{
    margin:10px 45px;
    font-size:20px;
    font-weight:bold;
}
.style p.pantalon{
    margin:5px 20px;
    font-size:18px;
}
.style p.chaussure{
    margin:5px 19px;
}

.sary{
    background-color: white;
    height: 160px;
}
/* Bouton pour fermer la modale */
.close {
   position: fixed;
   color: black;
   padding: 1px 6px 6px 6px;
   height: 28px;
   background:white;
   left:89%;
   font-size: 38px;
   font-weight: bold;
}

.close:hover,
.close:focus {
    background:black;
    color:red;
    text-decoration: none;
    cursor: pointer;
}
.Ajouters{
    background-color: yellow;
    width: 200px;
    height: 60vh;
    margin: -335px 500px;
}

</style>