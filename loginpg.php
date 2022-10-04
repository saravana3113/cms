<html>
<head>
    <title>Student Login</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <script src="login.js"></script>

</head>



<body id="b1">
    <?php 
    session_start();
?>

    <div id="h1">
        
        <img style="float:right" src="uni.jpeg"></div>

    <form align="center" name="login"  class="f2" action="https://localhost/iteproject/login.php"
    target="_self" method="post"> 
        <p id="link" style="color:rgb(29, 5, 41)">Kindly <a href="#f2">register</a> before login if not registered earlier</p>
    <div id="d1" class="d" align="Center"><h2>Login / Sign up</h2> 
        
    <?php 
if (isset($_SESSION['error2'])){
    echo "<font style='color:red'>$_SESSION[error2]</font><br>";
    unset($_SESSION['error']);
}
?>
     <label for="loginid">User Email Id:</label><br>
      <input required class="t1" type="text" id="loginid" name="loginid"><br><br>

      <label for="password">Enter your password:</label><br>
      <input required class="t1" type="password" id="password" name="password"><br><br>
      
          <input type="submit" class="b" value="SUBMIT" style="font-size:20;border-radius:10px">
         <input type="reset" class="b" value="CANCEL" style="font-size:20;border-radius:10px;"> 
        </div>
    </form>


        <br><br><br><br><br><br><br>
        
            <div class="d" id="d2">
                <div id="d3">
                    <img id="img" alt="image here" src="aulogo.jpeg"/><br>
                <center id="s1"></center>
                </div>
       
                <form class="f1" id="f2" 
                target="_self" onsubmit="return valid()"style="float:right;width:70%;height:100%" method="post" 
                action="https://localhost/iteproject/sqlconnect.php" align="center" name="fs">
                    <h2>New User Registration</h2>
                    <?php 
if (isset($_SESSION['error1'])){
    echo "<font style='color:red'>$_SESSION[error1]</font><br>";
    unset($_SESSION['error1']);
}
?>
            <label class="i1" for="name">Enter your name:</label>
            <input class="t2" type="text" id="name" name="name" placeholder="Full Name" required><br><br>
            <label class="i1" for="course">Course name:</label>
            <input required onchange="course()" class="t2" type="text" id="crs" name="crs" placeholder="Course name"><br><br>
            <label class="i1" for="dept">Department:</label>
            <input required class="t2" type="text" id="dept" name="dept" placeholder="Department"><br><br>
             <label class="i1" for="qual">Highest Educational qualification:</label>
            <select required class="t2" name="qual" id="qual">
                <option value="">---select---</option>
                <option value="High school/Equivalent">High school/Equivalent</option>
                <option value="Diploma/Equivalent">Diploma/Equivalent</option>
                <option value="Undergraduate">Undergraduate</option>
                <option value="Postgraduate">Postgraduate</option>
                <option value="Postgraduate">Postgraduate</option>
                <option value="Ph.D/M.S.">Ph.D/M.S.</option>
            </select><br><br>
            <label class="i1" for="email">Enter your email ID:</label>
            <input required onkeyup="valid()"  class="t2"type="email" id="email" name="email" placeholder="Email ID"><span id="p1"></span><br><br>
            <label class="i1" for="pword">Enter a password:</label>
            <input required onkeyup="valid()" class="t2" type="password" id="pword"name="pword" placeholder="e.g.Asdfs@1324"><span id="p2"></span><br><br>
            <label class="i1" for="pword2">confirm password:</label>
             <input required onchange="pwd()" class="t2" type="password" id="pword2" name="pword2"><span id="p3"></span><br><br>
                <input type="submit" class="b" value="REGISTER">
               <input type="reset" class="b" value="CANCEL"> 
            </form>
            </div>
    
   
            

       
        </body> 
</html>