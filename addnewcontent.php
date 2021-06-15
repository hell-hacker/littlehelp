<link rel=stylesheet href='cssokk.css'>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
</script>
<body style='background-color:#140e1d'>
<div id='addcontent'>
       <h1 id='addhead'>Add New Content</h1>
       <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
       <label>Name</label>
       <input required name='name' type="text" placeholder="eg. Raman Garg"><br><br><br>
           <label>Category</label> <br>
           <select id="category" name='category' class='select' required >
                    <option name="test paper">Test Papers</option>
                    <option name="exam paper">Exam Papers</option>
                    <option name="video">Video</option>
                    <option name="class notes">Class Notes</option>      
            </select>        <br><br><br>
           <label>Subject</label><br>
                <select id="subject" name='subject' class='select' required>
                    <option name="Applied Mathematics-I" >Applied Mathematics-I</option>
                    <option name="Applied Mathematics-II">Applied Mathematics-II</option>
                    <option name="Applied Physics">Applied Physics</option>
                    <option name="Basic Electronics">Basic Electronics</option>
                    <option name="Chemistry and Environment Science">Chemistry and Environment Science</option>
                    <option name="Computer Programming in C++">Computer Programming in C++</option>
                    <option name="Elements of Mechanical Engineering">Elements of Mechanical Engineering</option>
                    <option name="Engineering Drawing">Engineering Drawing</option>
                    <option name="Electrical Engineering">Electrical Engineering</option>
                    <option name="Humanities">Humanities</option>
                    <option name="Technical English">Technical English</option>
                </select><br><br><br>
            <div id="file">
                  <label >File</label><br>  
                  <input  name='file' type='file'> <br><br>   
            </div>
              <input name='submit' type='submit' id='submit'>  
       </form>    

  <?php

      if(isset($_POST['submit']))
      {
          $name=$_POST['name'];
          $category=$_POST['category'];
          $subject=$_POST['subject'];
          if($category=='Video')
          {
            $link=$_POST['link'];
            $file="";
          }
          else
          {
            $link="";
            $file=$_FILES['file']['name'];
          move_uploaded_file($_FILES['file']['tmp_name'],"content/".$_FILES['file']['name']);
          $filetype=$_FILES['file']['type'];
          }
          if(($category=='Exam Papers'||$category=='Test Papers'||$category=='Class Notes')&&$filetype!='application/pdf'){
             ?>
                  <p id="error">File should be in pdf format</p>
             <?php 
           }
          
            else
          {
              include 'config.php';
              $sql="insert into addnewcontent values ('{$name}' ,'{$category}','{$subject}','{$file}','{$link}')";
              $result=mysqli_query($conn,$sql) or die("falied hshsh");
              header("Location: /paper.php");
          }
      }
  ?>
</div>
  <script>
        $(document).ready(function(){
           $("#category").on("change",function(e){
               if(this.value!='Video')
               $.ajax({
                   url:"forfile.php",
                   type:"POST",
                   success:function(data)
                   {
                      $("#file").html(data);
                   }
               })
               else{
                $.ajax({
                   url:"forlink.php",
                   type:"POST",
                   success:function(data)
                   {
                      $("#file").html(data);
                   }
               })
               }
           })
      });
  </script>
</body>