<?php
/*session_start();
session_unset();
session_destroy();
*/
?>
<style>
    #a{
        margin-top:21px;padding-bottom:30px;padding-top:30px;border:1px;
        background:rgb(84, 192, 147);
        width:50%;
        margin:auto;
    }
    input{
        width:90px;
    }
    button[type="submit"]{
        background-color:blue;color:white;
    }
    button[type="submit"]#confirmation_no{
        background-color:red;color:white;
    }
</style>
<div style="text-align:center;margin-top:3%;">
    <div id="a">
        <form action="" method="post">
            <h4>Vous voulez vraiment deconnecter?</h4>
            <button type="submit" name="confirmation_ok" id="confirmation_id">OUI</button>
            <button type="submit" name="confirmation_no" id="confirmation_no">NON</button>
        </form>
    </div>
</div>
<?php  
  if(isset($_POST['confirmation_ok'])){
      header('location:conClients.php');
  }
  elseif(isset($_POST['confirmation_no'])){
    header('location:categorieClients.php');
  }
?>

