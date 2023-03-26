
<?php

include ('school connect.php');

session_start();

?>
<!DOCTYPE html>
<?php


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="school.css">
</head>
<body>
    <div class="login">
        <form action="" method="post">
          <div>
            <label for="admission">Enter your Admission Number:</label><br>  
            <input type="text" name="adm" id="adm" autocomplete="off">
          </div>
             <input type="submit" value="Login" name="login" id="login">
        </form>
    </div>
   
   <?php 
    if(isset($_POST['login'])){
      

     $adm=$_POST['adm'];
     
      $select="select * from `admission` where adm_no='$adm'";
      $result=mysqli_query($con,$select);
      
     if(mysqli_num_rows($result)>0){
      
      $riw=mysqli_fetch_array($result);
      $status=$riw['det'];
     
 
      
      $_SESSION['state']=$riw['det'];
      $_SESSION['data']=$riw;
   
     if($status==0){
     
    
    header('location:voting page.php');
     }else{


      echo '<script>alert("You have already voted")
      </script>';
     }

     }else{
  

      echo '<script>alert("You are not Registered")
      </script>';
      

     }
    }
    




   

  ?>
</body>
</html>