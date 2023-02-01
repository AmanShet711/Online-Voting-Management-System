<html>

<head>

<style>

table

{
	text-align: center;
	margin-left: auto;
  margin-right: auto;
  height: 50%;
  width: 50%;
  background-color: #B6EADA;
  opacity: 80%;
  font-family: cursive;
  font-size: large;

border-style:solid;

border-width:2px;

border-color: black;

}
body{
	background-color: bisque;
      background: url(../cover1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


</style>

</head>

<body bgcolor="#EEFDEF">
	<br><br><br><br><br><br><br>
	<h1 style="text-align: center; font-family: cursive;">Candidates below 25 years</h1>

<?php

$con = mysqli_connect("localhost","root","Aman@0711","aman");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

 

$result = mysqli_query($con, "SELECT * from trig where age<25");

echo "<table border='1'>

<tr>

<th>Candidate ID</th>

<th>Candidate name</th>

<th>Age</th>

<th>Gender</th>



</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['c_id'] . "</td>";

  echo "<td>" . $row['c_name'] . "</td>";

  echo "<td>" . $row['age'] . "</td>";

  echo "<td>" . $row['gender'] . "</td>";


  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($con);

?>

</body>

</html>