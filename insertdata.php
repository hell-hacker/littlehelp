<?php
   include "config.php";
   $name=$_POST['Name'];
   $branch=$_POST['Branch'];
   $year=$_POST['Year'];
   $roll=$_POST['Roll'];
   
   $sql="select * from signup where roll='{$roll}'";
   $result=mysqli_query($conn,$sql) or die("Not inserted");
   if(mysqli_num_rows($result)>0){
    ?><?php
   }
   else{
   $sql="insert into signup values('{$name}','{$roll}','{$branch}','{$year}')";
   $result=mysqli_query($conn,$sql) or die("Not inserted");
   ?>
      <script>
     location.href="/index.php";
     </script> 
   <?php
   }
?>