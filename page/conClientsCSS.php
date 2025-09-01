<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:"Verdana, Geneva, Tahoma, sans-serif";
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: /*#232429*/white;
}
.tableau{
   position: relative;
   width: 380px;
   height: 350px;
   overflow: hidden;
   background: #1c1c1c;
   border-radius: 8px;
       
}
.tableau::before{
    content:'';
    position: absolute;
    left: -50%;
    top: -50%;
    width: 380px;
    height: 350px;
    background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
    animation: animate 6s linear infinite;
    transform-origin: bottom right;
}
.tableau::after{
    content:'';
    position: absolute;
    left: -50%;
    top: -50%;
    width: 380px;
    height: 350px;
    background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
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
   position: absolute;
   inset:2px;
   border-radius: 8px;
   z-index: 10;
   background: seashell;
   padding: 50px 40px;
   display: flex;
   flex-direction: column;
}
.FormBox h2{
    color: black;
    font-weight: 500;
    text-align: center;
    letter-spacing: 1px;
}
.inputBox{
    position: relative;
    width: 300px;
    margin-top: 35px;
}
.inputBox input{
position: relative;
width: 100%;
padding: 20px 10px 10px;
background: transparent;
border: none;
outline: none;
color: #23242a;
font-size: 1em;
letter-spacing: 0.05em;
z-index: 10;
}
.inputBox span{
    position: absolute;
    left: 0;
    padding: 20px 0px 10px;
    font-size: 1em;
    color:black;
    pointer-events: none;
    letter-spacing: 0.05em;
    transition: 0.5s;

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
.links{
    display: flex;
    justify-content: space-between;
    margin-left:70%;
    margin-top: 20px;
}
.links a{
    margin: 10px 0;
    font-size: 1em;
    color: black;
   text-decoration: none;
}
.links a:hover,
.links a:nth-child(2)
{
    color:rgb(42, 136, 5);
}

input[type="submit"]
{
    border:none;
    outline: none;
    background: rgb(84, 192, 147);
    padding: 11px 25px;
    width: 100px;
    margin-top: -30px;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
}
input[type="submit"]:hover
{
    background-color:rgb(42, 136, 5);
}
</style>







  
