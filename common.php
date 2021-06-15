
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
</script>
<?php
   session_start();
    if(!isset($_SESSION['roll'])){ 
       header("Location: /index.php");
    }
?>
<link rel="stylesheet" href="cssokk.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div id="header">
        <h1 id="littlehelp">LittleHelp</h1>
        <a href="logout.php" class="upload">logout</a>
        <a style="position: absolute;right: 207px; color: #03c9f5" href="addnewcontent.php" class="upload" >Add New Content</a>
    </div>
    <div id="navbar">
        <a href="home.php" class="nav" id="Home">Home</a>
        <a href="paper.php"  class="nav" id="Paper">Paper</a>
        <a href="video.php"  class="nav" id="Video">Video</a>
        <a href="classNotes.php"  class="nav" id="class notes">Class Notes</a>
        <a href="contact.php"  class="nav" id="contact">Contact with Expert</a>
    </div>
    <select  name="subject" id="sel-paper" class="select" >
                   <option name="Applied Mathematics-I" >Applied Mathematics-I</option></a>
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
                    
        </select>
      