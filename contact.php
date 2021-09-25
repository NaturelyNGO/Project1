<?php
$server_name="localhost";
$username="id17629674_naturelyngo";
$password="5Fc^gGg>pBinYCUZ";
$database_name="id17629674_projectdb";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['send']))
{	
	 $Name = $_POST['Name'];
	 $Email = $_POST['Email'];
	 $Mobile = $_POST['Mobile'];
	 $Message = $_POST['Message'];

	 $sql_query = "INSERT INTO contact_info (Name,Email,Mobile,Message)
	 VALUES ('$Name','$Email',' $Mobile','$Message')";
    if (mysqli_query($conn, $sql_query)) 
    {
      header('location: index.html');
    } 
    else
      {
     echo "Error: " . $sql . "" . mysqli_error($conn);
    } 

	
	 mysqli_close($conn);
}



?>
