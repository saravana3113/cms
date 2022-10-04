<html>
<head>
    <title>Student Login for OCW</title>
    <link rel="stylesheet" href="loginstyle.css">
    <script src="login.js"></script>
</head>



<body id="b1">

    <form align="center" name="login" class="f2" action="sqlconnect.php" method="post"> 
 
    <img style="float:right" src="uni.jpeg"></img>    
    
   
    
    <div id="d1" class="d" align="Center"><h2>Login / Sign up</h2> 
        

     <label for="loginid">Student Login Id:</label><br>
      <input class="t1" type="text" id="loginid" name="loginid"><br><br>

      <label for="password">Enter your password:</label><br>
      <input class="t1" type="password" id="password" name="password"><br><br>
      
          <input type="submit" value="SUBMIT" style="font-size:20;border-radius:10px">
         <input type="submit" value="CANCEL" style="font-size:20;border-radius:10px;"> 
         <p style="float:right;color:grey">Kindly register before login if not registered earlier</p>
        
        
        </div>
    </form>


        <br><br><br><br><br>
        
            <div class="d" id="d2">
                <div id="d3">
                <img id="img" alt="image here" src="aulogo.jpeg"/><br>
                <center id="s1"></center>
            </div>
                <form class="f1" id="f2" style="float:left;width:50%" align="center" name="fs">
                    <h2>New User Registration</h2>
            <label  for="name">Enter your name:</label>
            <input class="t2" type="text" id="name" name="name" placeholder="Full Name"><br><br>
            <label  for="course">Course name:</label>
            <input onchange="course()" class="t2" type="text" id="crs" name="crs" placeholder="Course name"><br><br>
            <label  for="dept">Department:</label>
            <input class="t2" type="text" id="dept" name="dept" placeholder="Department"><br><br>
             <label for="acdet">Highest Educational qualification:</label>
            <select calss="t2">
                <option value="">---select---</option>
                <option value="High school/Equivalent">High school/Equivalent</option>
                <option value="Diploma/Equivalent">Diploma/Equivalent</option>
                <option value="Undergraduate">Undergraduate</option>
                <option value="Postgraduate">Postgraduate</option>
                <option value="Postgraduate">Postgraduate</option>
                <option value="Ph.D/M.S.">Ph.D/M.S.</option>
            </select><br><br>
            <label for="email">Enter your email ID:</label>
            <input class="t2"type="email" id="email" name="email" placeholder="Email ID"><br><br>
            <label for="pword">Enter a password:</label>
            <input class="t2" type="password" id="pword"name="pword" placeholder="e.g.Asdfs@1324"><br><br>
            <label for="pword2">confirm password:</label>
             <input class="t2" type="password" id="pword2" name="pword2"><br><br>
                <input type="submit" class="b" value="REGISTER">
               <input type="submit" class="b" value="CANCEL"> 
            </form>
            </div>
    
   
            

       
        </body> 
</html>
