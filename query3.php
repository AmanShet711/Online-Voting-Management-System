<html>

<head>

<style>

table

{
	text-align: center;
	margin-left: auto;
  margin-right: auto;
  height: 30%;
  width: 30%;
  background-color: #5B8FB9;
  opacity: 80%;
  font-family: cursive;
  font-size: larger;

border-style:solid;

border-width:2px;

border-color: black;

}
body{
	background-color: bisque;
      background: url(../male.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


</style>

</head>

<body bgcolor="#EEFDEF">
	<br><br><br><br><br><br><br>
	<h1 style="text-align: center; font-family: cursive;">Number of Male and Female Voters</h1>

<?php

$con = mysqli_connect("localhost","root","Aman@0711","aman");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

 

$result1 = mysqli_query($con, "SELECT gender, COUNT(v_id) AS no_of_females FROM voter  where gender ='F' GROUP BY gender");
$result2 = mysqli_query($con, "SELECT gender, COUNT(v_id) AS no_of_males FROM voter  where gender ='M' GROUP BY gender");
echo "<table border='1'>

<tr>

<th>Gender</th>
<th>Number of Females</th>



</tr>";



while($row = mysqli_fetch_array($result1))

  {

  echo "<tr>";

  echo "<td>" . $row['gender'] . "</td>";

  echo "<td>" . $row['no_of_females'] . "</td>";


  echo "</tr>";
  
  }
  
  echo "<table border='1'>
  <tr>

	<th>Gender</th>
	<th>Number of Males</th>



	</tr>";

 

while($row = mysqli_fetch_array($result2))

  {

  echo "<tr>";

  echo "<td>" . $row['gender'] . "</td>";

  echo "<td>" . $row['no_of_males'] . "</td>";


  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($con);

?>

</body>

</html>