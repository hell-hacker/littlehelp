<link rel="stylesheet" href="cssokk.css"> 
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
</script>
<body style="background-color:#0e0e23">
  <h1 id="heading">LittleHelp</h1>
   <div id="indexD" style="z-index:1">      
          <button id="login" class="index">LogIn</button>
          <button style="border:none" id="signup" class="index">SignUp</button>
             <br><br>
                <div id="innerdiv"> 
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <label>Name</label><br>
                        <input name='name' required><br><br><br>
                        <label>Roll No.</label><br>
                        <input name='roll' required><br><br><br>
                        <input name="submit" id="submit" type="submit" >
                    </form>    
                </div>
    </div>
    
   <script>
     
       $(document).ready(function(){
           $("#login").on("click",function(e){
            document.getElementById("signup").style.border='none';
            document.getElementById("login").style.borderBottom= "4px solid #16beff";
               $.ajax({
                   url:"login.php",
                   type:"POST",
                   success:function(data)
                   {
                     $("#innerdiv").html(data);
                     window.location.href="/index.php";                     
                   }
               })
           })
           $("#signup").on('click',function(e){
            document.getElementById("login").style.border='none';
            document.getElementById("signup").style.borderBottom= "4px solid #16beff";
               $.ajax({
                   url:"signup.php",
                   type:"POST",
                   success:function(data)
                   {
                     $("#innerdiv").html(data);
                   }
               })
           })
       })
   </script>
</body>
 <?php
     if(isset($_POST['submit'])){
       $name=$_POST['name'];
       $roll=$_POST['roll'];
       include 'config.php';
       $sql="select * from signup where name='{$name}' and roll='{$roll}'";
       $result =mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)==0){
        ?>
                  <p style="position:relative;top:400px" id="error">Name or Password not match</p>
         <?php 
       }
       else{
         session_start();
         $_SESSION['roll']=$roll;
         $_SESSION['name']=$name;
         header("Location: http://localhost/littlehelp/paper.php");
       }
     } 
 ?>