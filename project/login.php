<?php
session_start()
?>
<?php
   $input1=$_POST['login'];  
   $input2=$_POST['password'];

$conn = mysqli_connect("localhost","root","","signup");
if (!$conn) {
  echo "Connection failed: " . mysqli_connect_error();
}else
{
echo "";
}
/* if (mysqli_multi_query($conn, $ins)) {
  echo "<br>";
} else {
  echo "Error: " . $ins . "<br>" . mysqli_error($conn);
} */

$conn = mysqli_connect("localhost","root","","signup");
 $sql="SELECT * FROM signup_table WHERE username='$input1' and password='$input2'";
$result = mysqli_query($conn, $sql);

$count=mysqli_num_rows($result);

if($count<1){echo "Wrong Username or Password";}
else
    {
        /* $_SESSION[user]=$username;
        header("location:"); */
		include 'main.html';
    } 




mysqli_close($conn);

?>