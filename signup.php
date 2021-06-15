<link rel="stylesheet" href="cssokk.css">
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
</script>
        <label>Name</label><br>
           <input name='name' id="name"><br><br><br>
        <label >Roll No.</label><br>
           <input  id="roll" name='roll' ><br><br><br>
        <label>Year</label><br>
            <select name="year" id="year" >
                <option value="1">1st year</option>
                <option value="2">2nd year</option>
                <option value="3">3rd year</option>
                <option value="4">4th year</option>
            </select><br><br><br>
        <label>Branch</label><br>
        <select name="branch" id="branch" >
            <option value="cse">Computer Science</option>
            <option value="it">Information Technology</option>
            <option value="ete">Eelctronic and Telecommunication</option>
            <option value="ei">Electrical Instrumental</option>
            <option value="mech">Mechanical Engineering</option>
            <option value="civil">Civil Engineering</option>
        </select><br><br><br>
        <input name='submit' id="submit" type="submit" >

    
    <script>
        $("#submit").on("click",function(e){
            
            var v=document.getElementById("roll").value;             
          
            if(v.length!=7){
                alert("Roll no. not valid");
            }
            if(v.length==7)
            {
                var check=true;
                y=parseInt(v.substr(0,2));
                if(y<15||y>21)
                check=false;
                if(v[2]!='I'&&v[2]!='M'&&v[2]!='C'&&v[3]!='E')
                 check=false;
                if(v[4]!=1&&v[4]!=0)
                check=false;
                if(!check)
                alert("Roll no. not valid");
                else{
                  var name=$("#name").val();
                  var roll=$("#roll").val();
                  var year=$("#year").val();
                  var branch=$("#branch").val();
                     $.ajax({
                            url:"insertdata.php",
                            type:"POST",
                            data:{Name:name,Roll:roll,Year:year,Branch:branch},
                            success:function(data)
                            {
                                console.log(data);
                                if(data.length==4)
                                {
                                    alert("Record already Exits");
                                window.location.href="/index.php";
                                }
                                else{
                                    window.location.href="/index.php";
                                }
                          }
                        })
                }    
            }
            
        })
     </script>           
