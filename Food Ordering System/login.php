<?php include("connection.php") ?>
<?php
session_start();
$_SESSION['login_status']=false;


$name = $_POST["uname"];
$pass = $_POST["upass"];
echo $name;
echo '<br>';
echo $pass.'<br>';
//$hash_pass=md5($pass);//encrypting the password

//$conn = new mysqli("localhost","root","","scms");


$query = "SELECT * from `login` where `USERNAME`='$name' and `PASSWORD`='$pass'";
$sql_cursor=mysqli_query($conn,$query);
print_r($sql_cursor);
$total_rows =  mysqli_num_rows($sql_cursor);
echo $total_rows;
if($total_rows>0)
 {  
   $row = mysqli_fetch_assoc($sql_cursor);
   

    $_SESSION['login_status']=true;
    //$_SESSION['userid'] = $row['sellerid'];
    //print_r( $_SESSION['userid']);
    $_SESSION['username'] = $row['USERNAME'];

    echo "<h1>Login Successful</h1>";
    header("location:restaurant.html");
 }

 else{
    echo "<h1>Invalid password</h1>";
 }

 ?>

