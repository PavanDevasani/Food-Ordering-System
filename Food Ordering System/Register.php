
<?php

$name=$_POST['uname'];
$pass=$_POST['upass1'];

//$hash_pass=md5($pass);

//$conn=new mysqli("ftpupload.net","epiz_34235582","kLGJiFhRh81Oub","scms");

include("connection.php");

$sql_status = mysqli_query($conn,"INSERT INTO `login`(`USERNAME`,`PASSWORD`) VALUES('$name','$pass')");

if($sql_status)
{
    echo "Successfully Registered";
    

}
else{
echo "SQL Query Error";
echo mysqli_error($conn);
}



?>


<h1 style='background-color:green;color:white;text-align:center;'>Successfully Registered...</h1>
<html>
<body>

<a href="index.php"><h1><button style="cursor:pointer;text-align:center;background-color:brown;color:white;margin-left:50%;padding:5px;"><h4> >>Back to login<h4> </button></h1></a>