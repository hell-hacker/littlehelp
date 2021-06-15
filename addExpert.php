<link rel=stylesheet href='cssokk.css'>
<body style='background-color:#140e1d'>
<div style="position:relative;top:0px;" id='addcontent'>
       <h1 id='addhead'>Add New Expert</h1>
       <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <label >Name</label>
                <input name="name" type="text"/><br><br>
                <label>Specification 1</label>
                <input name="sp1" type="text"/><br><br>
                <label>Specification 2</label>
                <input name="sp2" type="text"/><br><br>
                <label>Specification 3</label>
                <input name="sp3" type="text"/><br><br>
                <label>Mobile</label>
                <input name="mobile" type="text"/><br><br>
                <label>Email</label><br>
                <input name="email" type="text"/><br><br>
                <label>Expert In :</label><br><br>
                <input name="CompetitiveProgramming" class="check" type="checkbox" value="val1"  >
                <label class="checklabel" > Competitive Programming</label><br><br>
                <input class="check" type="checkbox" name="WebDevelopment" >
                <label class="checklabel">Web Development</label><br><br>
                <input class="check" type="checkbox"  name="C++" >
                <label class="checklabel"> C++</label><br><br>
                <input class="check" type="checkbox"  name="Python" >
                <label class="checklabel">Python</label><br><br>
                <input class="check" type="checkbox"  name="Android" >
                <label class="checklabel">Android</label><br><br>
                <input class="check" type="checkbox"  name="React" >
                <label class="checklabel">React</label><br><br><br>
                <label>Image</label><br><br>
                <input name="image" type="file"/><br><br>
                <input name="submit" type="submit" id="submit">
         </form>         

 </div>
 </body>
 <?php
      if(isset($_POST['submit']))
      {
          $name=$_POST['name'];
          $mobile=$_POST['mobile'];
          $email=$_POST['email'];
          $sp1=$_POST['sp1'];
          $sp2=$_POST['sp2'];
          $sp3=$_POST['sp3'];
          if(isset($_POST['CompetitiveProgramming']))
          $cp=1;
          else
          $cp=0;
          if(isset($_POST['WebDevelopment']))
          $wd=1;
          else
          $wd=0;
          if(isset($_POST['C++']))
          $cpp=1;
          else
          $cpp=0;
          if(isset($_POST['Python']))
          $python=1;
          else
          $python=0;
          if(isset($_POST['Android']))
          $android=1;
          else
          $android=0;
          if(isset($_POST['React']))
          $react=1;
          else
          $react=0;
          $file=$_FILES['image']['name'];
          move_uploaded_file($_FILES['image']['tmp_name'],"images/".$_FILES['image']['name']);
          $filetype=$_FILES['image']['type'];
          if($filetype!='image/jpeg'){
            ?>
                 <p id="error">File should be in jpg format</p>
            <?php 
          }
          else {
            include 'config.php';
            $sql="insert into AddExpert values ('{$file}','{$name}','{$mobile}','{$email}','{$sp1}','{$sp2}','{$sp3}','{$cp}','{$wd}','{$cpp}','{$python}','{$android}','{$react}')";
            $result=mysqli_query($conn,$sql) or die();
           header("Location: /contact.php"); 
          }
      }
 ?>      