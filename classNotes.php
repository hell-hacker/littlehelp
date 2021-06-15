<link rel="stylesheet" href="cssokk.css">
  <body style="background-image: linear-gradient(-179deg, black ,#9b1ee9);">
  <?php
        include "common.php";
   ?>
 <div style="position:relative;top:-50px" id="ppp">       
    <h1 class="examhead">Applied Mathematics-I</h1>
     <?php include 'config.php';
     $sub='Applied Mathematics-I';
     $sql="select * from addnewcontent where category='Class Notes' and subject='{$sub}'";
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
   
     </div>
      <script>
      $(document).ready(function(){
           $("#sel-paper").on("change",function(e){
               $.ajax({
                   url:"classNotesAjax.php",
                   type:"POST",
                   data:{choosen_subject:this.value},
                   success:function(data)
                   {
                      $("#ppp").html(data);
                   }
               })
           })
      });
      </script>   
</body>
