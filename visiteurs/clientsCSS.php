<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:"Verdana, Geneva, Tahoma, sans-serif";
}
body{
    background: #232429;
}
.tableau{
  position: relative;
  width: 750px;
   height: 400px;
   overflow: hidden;
   background: #1c1c1c;
   margin-top: 100px;
    margin-left: 20%;
   border-radius: 8px;   
}
.tableau::before{
    content:'';
    position: absolute;
    left: -50%;
    top: -50%;
    width: 750px;
   height: 100vh;
    background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
    animation: animate 6s linear infinite;
    transform-origin: bottom right;
}
.tableau::after{
    content:'';
    position: absolute;
    left: -50%;
    top: -50%;
    width: 750px;
    height: 100vh;
    background: linear-gradient( rgb(42, 136, 5) ,rgb(42, 136, 5) ,rgb(42, 136, 5), rgb(42, 136, 5));
    animation: animate 6s linear infinite;
    transform-origin: bottom right;
    animation-delay:-3s ;
}
@keyframes animate{
    0%
    {
        transform:rotate(0deg);
    }
    100%
    {
        transform:rotate(360deg);
    }}
.FormBox{
   position: relative;
   display:flex;
   justify-content:space-between;
   inset:2px;
   top:-40px;
   border-radius: 8px;
   z-index: 10;
  background: seashell;
   padding: 50px 30px;
   display: flex;
     
}
.FormBox h2{
    position: relative;
    color: black;
    font-weight: 500;
    left:40%;
    letter-spacing: 1px;
}
.inputBox{
    position: relative;
    width: 300px;
    margin-top: 35px;
    margin-left:-40%;
}
.inputBox input{
    position: relative;
    width: 80%;
    padding: 15px 10px 10px;
    background: transparent;
    border: none;
    outline: none;
    color: black;
    font-size: 1em;
    letter-spacing: 0.05em;
    z-index: 10;
}
.inputBox span{
    position: absolute;
    left: 0;
    padding: 20px 0px 10px;
    font-size: 1.2em;
    color: black;
    pointer-events: none;
    letter-spacing: 0.05em;
    transition: 0.5s;

}
.droite{
    margin-left:8%;
    margin-top:1%;
}
.inputBox input:valid~span,
.inputBox input:focus~span
{
    color: black;
   transform: translateX(0px) translateY(-34px);
   font-size: 0.75em;
}
.inputBox i{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: rgb(42, 136, 5);
    border-radius: 4px;
    transition: 0.5s;
    pointer-events: none;
    z-index: 9;
}
.inputBox input:valid~i,
.inputBox input:focus~i
{
       height: 44px;

}
input[type="submit"]
{
    border:none;
    outline: none;
    background: orangered;
    padding: 11px 18px;
    width: 100px;
    margin-top: 22px;
    margin-left:-60%;
    border-radius: 4px;
    font-size:16px;
    font-weight: 600;
    cursor: pointer;
}
input[type="submit"]:hover
{
    background-color:rgb(42, 136, 5);
}
/* Bouton pour fermer la modale */
.close {
   position: relative;
   color: black;
   float: right;
   left:100%;
   top:-19px;
   font-size: 38px;
   font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;

}
.form-control.success input{
        border-color: var(--color-success);
        }
        .form-control.error input{
            border-color: var(--color-error);
        }
        .form-control.success i.fa-check-circle{
            color: var(--color-success);
            visibility: visible;
        }
        .form-control.error i.fa-exclamation{
            color:var(--color-error);
            visibility: visible;
        }
        .form-control.error small{
            color: var(--color-error);
            visibility: visible;
        }
</style>