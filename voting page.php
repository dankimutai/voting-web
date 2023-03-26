<?php

include ('school connect.php');

session_start();





$data=$_SESSION['data'];
$now=$data['adm_no'];



echo '<div class="span1"> Your admission is:<span class="span">'."$now".'</span></div>';

$dat="UPDATE admission set det=0 where det=1'";
 mysqli_query($con ,$dat);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting page</title>
    <link rel="stylesheet" href="school.css">
    <style>
    input[type="radio"] {
        font-size: 20px;
    }
</style>
</head>
<body>
<div class="captain">
        
     

      <form method='post' action=''>
      <style>
           
         .dis{
          background-color: rgb(12, 208, 84);
          
          border-radius:10px;
          width:200px;
         margin:10px;
         width
         }
         
         
     .All{
         
          display:flex;
          flex-wrap:wrap;
         }
    .span{
             background: linear-gradient(to right, rgba(45, 210, 8, 0.6), #ff004f);
             font-size:40px;
             border-radius:10px;
             text-align:center;
            align-items:center;
            justify-content: center;
            color:white;
      }
      .span1{
            color: #e20e52;
             text-align:center;
            align-items:center;
            font-size:30px;
            font-weight:600;
           
      }
      .adm{
        background: linear-gradient(to right, rgba(45, 210, 8, 0.6), #ff004f);
        margin:10px;
        border-radius:10px;
        width:250px;
        height:400px;
        
      }
      .inputA{
        font-size:40px;
      }
      .san{
        background: linear-gradient(to right, rgba(45, 210, 8, 0.6), #ffbb00);
        margin:10px;
        border-radius:10px;
        width:250px;
        height:400px;
      }
      .gam{
        background: linear-gradient(to right, rgba(89, 8, 210, 0.6),#ff004f);
        margin:10px;
        border-radius:10px;
        width:250px;
        height:400px;
      }
      .ent{
        background: linear-gradient(to right, rgba(45, 210, 8, 0.6), #ff004f);
        margin:10px;
        border-radius:10px;
        width:250px;
        height:400px;
      }
      .cap{
        background: linear-gradient(to right, rgba(45, 8, 187, 0.26), #ff004f);
          margin:10px;
          border-radius:10px;
          width:250px;
        height:400px;
      }
      .submit{
        font-size:30px;
         background: linear-gradient(to right, rgba(183, 210, 8, 0.6), #dd0dbe);
         
      }
      .input{
            text-align:center;
            align-items:center;
            justify-content: center;

            margin-top:10rem;
           }
           .radio{
            font-size:100rem;
           }
           h1{
            color:blue;
             font-weight:2500;
            
           }
           input[type="radio"] {
            font-size: 20px;
           }
     </style>
      <?php
      
       echo'<div class="All">';
       echo'<div class="cap">';
       echo'<h1>Captain</h1>';
       $select="select * from `captain`";
    
     $result=mysqli_query($con,$select);
    
     while($row=mysqli_fetch_assoc($result)){
        echo "<label  class='inputA'><input type='radio' name='vote[]' value='".$row['id']."'>".$row['names']."</label><br>";
     
    
          }
         echo '</div>';
        
       echo'<div class="adm">';
       echo'<h1>Adminstration</h1>';
       $adminstration="select * from `adminstration`";
    
     $admin=mysqli_query($con,$adminstration);
    
     while($adm=mysqli_fetch_assoc($admin)){

        echo "<label  class='inputA'><span class='inputA'=><input type='radio'  name='adm[]' value='".$adm['id']."'>".$adm['names']."</span></label><br>";
     
    
          }
         echo '</div>';
       echo'<div class="san">';
       echo'<h1>Sanitation</h1>';
       $sanitation="select * from `sanitation`";
    
     $sani=mysqli_query($con,$sanitation);
    
     while($san=mysqli_fetch_assoc($sani)){
        echo "<label  class='inputA'><input type='radio' name='san[]' value='".$san['id']."'>".$san['names']."</label><br>";
     
    
          }
         echo '</div>';
       echo'<div class="ent">';
       echo'<h1>Entertertainment</h1>';
       $entertainment="select * from `entertainment`";
    
     $entaa=mysqli_query($con,$entertainment);
    
     while($ent=mysqli_fetch_assoc($entaa)){
        echo "<label  class='inputA'><input type='radio' name='ent[]' value='".$ent['id']."'>".$ent['names']."</label><br>";
     
    
          }
         echo '</div>';
         
       echo'<div class="gam">';
       echo'<h1>Games</h1>';
       $games="select * from `games`";
    
     $gami=mysqli_query($con,$games);
    
     while($gam=mysqli_fetch_assoc($gami)){
        echo "<label  class='inputA'><input type='radio' name='gam[]' value='".$gam['id']."'>".$gam['names']."</label><br>";
     
    
          }
         echo '</div>';
         echo '</div>';
        
     if(isset($_POST['submit'])){

      if(isset($_POST['adm']) && isset($_POST['vote'])  && isset($_POST['san']) && isset($_POST['ent']) && isset($_POST['gam'])){
       

        $adm=$_POST['adm'];
        $num_votes=count($adm);
        for($i=0; $i<$num_votes; $i++){
         $adms=$adm[$i];
     
        }

       $votes=$_POST['vote'];
       $num_votes=count($votes);
       for($i=0; $i<$num_votes; $i++){
        $vote=$votes[$i];
    
       }
     
       $san=$_POST['san'];
       $num_votes=count($san);
       for($i=0; $i<$num_votes; $i++){
        $sans=$san[$i];
    
       }
       $ent=$_POST['ent'];
       $num_votes=count($ent);
       for($i=0; $i<$num_votes; $i++){
        $ents=$ent[$i];
       }
       $gam=$_POST['gam'];
       $num_votes=count($gam);
       for($i=0; $i<$num_votes; $i++){
        $gams=$gam[$i];
       }
       $sql="UPDATE admission set det=1 where  det =0 and adm_no='$now'";
       
       mysqli_query($con,$sql);
     $sql="UPDATE captain set votes= votes + 1 where id='$vote'";
      mysqli_query($con,$sql);
       
     $sql="UPDATE adminstration set votes= votes + 1 where id='$adms'";
      mysqli_query($con,$sql);
     $sql="UPDATE sanitation set votes= votes + 1 where id='$sans'";
      mysqli_query($con,$sql);
     $sql="UPDATE entertainment set votes= votes + 1 where id='$ents'";
      mysqli_query($con,$sql);
     $sql="UPDATE games set votes= votes + 1 where id='$gams'";
      mysqli_query($con,$sql);
    
       
       
      
      echo '<script>window.location.href="thanks.php"</script>';
       
      }else{
      
        
      echo '<script>window.location.href="voting page.php"</script>';
  
      };

    }
    $update="UPDATE captain set votes=100 where names='mo salah'";
    $result=mysqli_query($con,$update);
     ?>
   <div class="input"><input type='submit' name='submit' value='submit' class="submit">
     </form></div> 
     </form>
    
     
     
      
      
     
      
     
    

  
       


</body>
</html>