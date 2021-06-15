<link rel="stylesheet" href="cssokk.css">
  <body style="background-image: linear-gradient(-179deg, black ,#9b1ee9);">
  <?php
        include "common.php";
   ?>
 <div style="position:relative;top:-50px" id="ppp">       
    <h1 class="examhead">Applied Mathematic-I</h1>
     <?php include 'config.php';
     $sub='Applied Mathematics-I';
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
    
</div>
      <script>
      $(document).ready(function(){
           $("#sel-paper").on("change",function(e){
               $.ajax({
                   url:"videoAjax.php",
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


<!-- 

<body style="background-color:black">
    
   <div style="position:relative;top:-50px">    
        <h1 class="examhead">Elements of Mechanical Engineering</h1>

    <div id="papercontent">
        <div id="gridpaper">
            <embed width="107%" height="100%"
            src="https://www.youtube.com/embed/videoseries?list=PL0b6OzIxLPbz1cgxiH5KCBsyQij1HsPtG" frameborder="0" allowfullscreen>  </iframe>
        </div>   
        <div id="gridpaper">
            <embed width="107%" height="100%"
            src="https://www.youtube.com/embed/videoseries?list=PL0b6OzIxLPbz1cgxiH5KCBsyQij1HsPtG" frameborder="0" allowfullscreen>  </iframe>
        </div>   
        <div id="gridpaper">
            <embed width="107%" height="100%"
            src="https://www.youtube.com/embed/videoseries?list=PL0b6OzIxLPbz1cgxiH5KCBsyQij1HsPtG" frameborder="0" allowfullscreen>  </iframe>
        </div>   
        <div id="gridpaper">
            <embed width="107%" height="100%"
            src="https://www.youtube.com/embed/videoseries?list=PL0b6OzIxLPbz1cgxiH5KCBsyQij1HsPtG" frameborder="0" allowfullscreen>  </iframe>
        </div>   
        
           
    </div>
  </div>  
<body> -->
    