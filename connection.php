<?php

if(isset($_POST["submit"])){
 $area=$_POST["area"];
 
  $flat=$_POST["check"];
 
  $gender=$_POST["gender"];
   
$output="";
  if($state=="SELECT..."){
       if($area=="SELECT...")
          $area="";
       
        }
 if($area=="" or $flat=="" or $gender==""){
     echo '<script>alert("Some FIELDS ARE EMPTY")</script>';
      header("location:rent.php");
   
     }else{$conn=mysqli_connect("localhost","root","123","rent_portal");
if(!$conn)
die("connection to database failed");
  $sql="select * from house where area='$area' and flat='$flat' and gender='$gender' ";
   $task=mysqli_query($conn,$sql);
 
   
  $output.='<h3 style="border:5px solid black;text-align:center;">SEARCH RESULTS !!!!!!</h3><hr>';
  
   if(mysqli_num_rows($task)>=1){
     $output.='<div>';
   while($row=mysqli_fetch_array($task)){
       $output.='<div >
       <div style="display:inline-block;border:2px solid black;"><img  src="images/'.$row["img"].'" height="199" width="299" ></div>
    <div style="display:inline-block;">
              <b>STATE : '.$row["state"].' </b> <br>
              <b>ADDRESS : '.$row["address"].' </b> <br>
              <b>AC      :'.$row["ac/nonac"].'</b><br>
              <b>RENT    :'.$row["max"].'</b><br>
              <b>FLAT :'.$row["flat"].'</b><br>
              <b>MESS     :'.$row["mess"].'</b><br>
              <b>LAUNDARY      :'.$row["laundary"].'</b><br>
              <b>GENDER:'.$row["gender"].'</b><br>
              <b>CONTACT :'.$row["contact"].'</b>
             </div>
              </div>  ';
                     }
        $output.='</div>';
        echo $output;
         } 
     else{
    echo '<h3 style="border:5px solid black;text-align:center;">SEARCH RESULTS !!!!!!</h3><hr><h3 style="text-align:center;">NOT AVAILABLE!!!!!!!</h3>';

      }  
   


      }


}




?>

