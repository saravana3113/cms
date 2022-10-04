<html>
<head><title>PHP login</title>
<style>
    body{
        font-size:70px;
    }
    </style>
</head>
<body>

<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "users";
// Create connection
$conn =mysqli_connect($dbhost,$dbuser,$dbpass,$db);


//retrieve data
$lgd=$_POST['loginid'];
$res= $conn->query("select password,name from registers where email='$lgd'");


while($row=mysqli_fetch_array($res)){
if ($_POST['password']==$row['password']){
    $_SESSION['name']=$row['name'];
    header("location:ece1.php");
}else{
    $_SESSION['error2']="Invalid Password/Login Id";
    header("location:loginpg.php");
    die( "Login failed");
}
}
?>
</body>
</html>