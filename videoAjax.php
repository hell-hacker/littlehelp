<link rel="stylesheet" href="cssokk.css">
<h1 class="examhead"><?php echo $_POST['choosen_subject']; ?></h1>
<?php include 'config.php';
     $sub=$_POST['choosen_subject'];
     $sql="select * from addnewcontent where category='Video' and subject='{$sub}'";
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
                <iframe width="107%" height="100%"
                src="<?php echo $row['link'] ?>" frameborder="0" allowfullscreen>  </iframe>
            </div>   
                    
        <?php  }  ?>
      </div>
      <?php } ?>
   