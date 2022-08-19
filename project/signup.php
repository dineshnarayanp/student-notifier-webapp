<?php
   $input1=$_POST['name'];  
   $input2=$_POST['age'];
   $input3=$_POST['signup'];  
   $input4=$_POST['password'];

$conn = mysqli_connect("localhost","root","","signup");
if (!$conn) {
  echo "Connection failed: " . mysqli_connect_error();
}else
{
echo "";
}
$ins="INSERT INTO signup_table (name, age, username,password) 
VALUES ('$input1',$input2,'$input3','$input4');";
if (mysqli_multi_query($conn, $ins)) {
  echo "WELCOME"."<br>";
} else {
  echo "Error: " . $ins . "<br>" . mysqli_error($conn);
}

$conn = mysqli_connect("localhost","root","","signup");
$sql = "SELECT name,username,password FROM signup_table";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo  $row["name"]."'s username is ". $row["username"]." and password is ". $row["password"]."<br>";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);

?>
