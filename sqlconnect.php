<html>
<head><title>PHP responsive</title>
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
// Check connection
if ($conn->connect_error) {
die("Connection failed:( " . $conn->connect_error);
}else{echo "Connection successful:)<br>";}

$inscom="insert into registers(name,course,dept,edqual,email,password)
values('$_POST[name]','$_POST[crs]','$_POST[dept]','$_POST[qual]','$_POST[email]','$_POST[pword]')";

$lgd=$_POST['email'];
$res= $conn->query("select * from registers where email='$lgd'");
if (mysqli_num_rows($res)>0){
    $_SESSION['error1']="User already exists";
    header("location:loginpg.php#f2");
    die( "Insertion failed");
}else{mysqli_query($conn,$inscom);
    echo "<script>alert('Your login email id:$_POST[email];')</script>";
    header("location:loginpg.php");
}


?>
</body>
</html>