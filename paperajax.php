<link rel="stylesheet" href="cssokk.css">
<h1 class="examhead">Exam Papers</h1>
   
<?php include 'config.php';
     $sub=$_POST['choosen_subject'];
     $sql="select * from addnewcontent where category='Exam Papers' and subject='{$sub}'";
     $result=mysqli_query($conn,$sql) or die("falied hshsh");
     if(mysqli_num_rows($result)==0)
     echo "<h1 style='color:white'>&nbsp &nbsp &nbsp &nbsp No results found</h1>";
     else
     {
         ?>
       <div id="papercontent">
       <?php
         while($row=mysqli_fetch_assoc($result))
         {
          ?>
               <div id="gridpaper">
                   <embed type="application/pdf" src="content/<?php echo $row['file'] ?>" width="107%" height="70%"></embed>
                   <p id="pdfname">By-<?php echo " ".$row['name']?></p>
                   <a href="<?php echo $row['file'] ?>" id="download">Download</a>
               </div>   
                      
           
        <?php  }  ?>
      </div>
      <?php } ?>
   <h1 class="examhead">Test Papers</h1>
   <?php include 'config.php';
     $sub=$_POST['choosen_subject'];
     $sql="select * from addnewcontent where category='Test Papers' and subject='{$sub}' ";
     $result=mysqli_query($conn,$sql) or die("falied hshsh");
     if(mysqli_num_rows($result)==0)
     echo "<h1 style='color:white'>&nbsp &nbsp &nbsp &nbsp No results found</h1>";
     else
     {
        ?>
       <div id="papercontent">
       <?php
         while($row=mysqli_fetch_assoc($result))
         {
          ?>
               <div id="gridpaper">
                   <embed type="application/pdf" src="content/<?php echo $row['file'] ?>" width="107%" height="70%"></embed>
                   <p id="pdfname">By-<?php echo " ".$row['name'] ?></p>
                   <a href="<?php echo $row['file'] ?>" id="download">Download</a>
               </div>   
                      
           
        <?php  }  ?>
      </div>
      <?php } ?>
