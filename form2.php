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

if(isset($_POST['PayNow']))
{	
	 $Name = $_POST['Name'];
	 $Email = $_POST['Email']; 
	 
	 $Address = $_POST['Address'];
	 $Mobile = $_POST['Mobile'];
	 

	 $sql_query = "INSERT INTO donation_info (Name,Email,Address,Mobile)
	 VALUES ('$Name','$Email','$Address','$Mobile')";
     if (mysqli_query($conn, $sql_query)) 
     {
     header('location:index.html');
    } 
    else
      {
     echo "Error: " . $sql . "" . mysqli_error($conn);
    } 

	
	 mysqli_close($conn);
   
     
}



?>