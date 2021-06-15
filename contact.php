<link rel="stylesheet" href="cssokk.css">
  <body style="background-image: linear-gradient(-179deg, black ,#9b1ee9);">
  <?php
        include "common.php";
   ?>
   <a style="color:#00fffd" class="upload" href="addExpert.php">AddExpert</a>
   <script>
      document.getElementById("sel-paper").style.display='none';
      //document.getElementById("upload").style.display='none';
      document.getElementsByClassName("upload")[0].style.display='none';
      document.getElementsByClassName("upload")[1].style.display='none';
   </script>
   <?php 
         include "config.php";
         $sql="select * from AddExpert ";
         $result=mysqli_query($conn,$sql) or die();
         if(mysqli_num_rows($result)>0){
           while($row=mysqli_fetch_assoc($result))
           {
               $expert="";
                 if($row['cp']=="1")
                 $expert.="competitive Programming";
                 if($row['wd']=="1"&&$expert!="")
                 $expert.=" , web development";
                 else  if($row['wd']=="1")
                 $expert.="web development";
                 if($row['android']=="1"&&$expert!="")
                 $expert.=" , Android";
                 else  if($row['android']=="1")
                 $expert.="Android";
                 if($row['python']=="1"&&$expert!="")
                 $expert.=" , Python";
                 else if($row['python']=="1")
                 $expert.="Python";
                 if($row['cpp']=="1"&&$expert!="")
                 $expert.=" , C++";
                 else if($row['cpp']=="1")
                 $expert.="C++";
                 if($row['react']=="1"&&$expert!="")
                 $expert.=" , React";
                 else if($row['react']=="1")
                 $expert.="React"
          
   ?>
   <div id="outdiv">
       <img src="images/<?php echo $row['file'] ?>" alt="" height="100px">
       <h1 id="experthead"><?php echo "Expert in ".$expert; ?><h1>
       <div id="inndiv" >
            <h1 id="divh"><?php echo $row['name'] ?></h1>
            <ul>
                <li><?php echo $row['sp1'] ?></li>
                <li><?php echo $row['sp2'] ?></li>
                <li><?php echo $row['sp3'] ?></li>
            </ul>
             <p class="contact">Mobile : <?php echo $row['mobile'] ?></p>
             <p class="contact">Email : <?php echo $row['email'] ?></p>
       </div>
   </div>
   <br><br>
   
  <?php }} ?> 
 </body>
