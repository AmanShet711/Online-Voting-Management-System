<?php 

$host="localhost";
$user="root";
$password="Aman@0711";
$db="aman";

$conn = mysqli_connect($host, $user, $password,$db);


if(! $conn ) {
         die('Could not connect: ' . mysqli_error($conn));
      }
$retval = mysqli_select_db( $conn, 'aman' );
if(! $retval ) {
         die('Could not select database: ' . mysqli_error($conn));
      }
#echo'worked';
if(isset($_POST['u_id'])){
    
$uname=$_POST['u_id'];
$password=$_POST['password'];
#echo $uname;
#echo $password;
    
$sql="select * from login where u_id='".$uname."'AND password='".$password."' limit 1";
    
$result=mysqli_query($conn,$sql);  
if(mysqli_num_rows($result)==1){
    header('location: dashboard.html');
    die();
    }
else{
        echo "You Have Entered Incorrect Password";
        exit();
    }
}  
#echo'worked again';
?>

<style>
ec{
color:red;
 font-size:56px;
 font-family:arial,sans-serif;
 padding:330px;

}