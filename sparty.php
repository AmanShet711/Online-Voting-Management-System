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
  background-color: cyan;
  opacity: 80%;
  font-family: cursive;
  font-size: large;

border-style:solid;

border-width:2px;

border-color:black;

}
body{
	background-color: bisque;
      background: url(../part1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


</style>

</head>

<body bgcolor="#EEFDEF">
	<br><br><br><br><br><br><br>

<?php

$con = mysqli_connect("localhost","root","Aman@0711","aman");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

 

$result = mysqli_query($con, "SELECT * FROM party");

echo "<table border='1'>

<tr>

<th>Party Id</th>

<th>Party name</th>

<th>Party Symbol</th>



</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['p_id'] . "</td>";

  echo "<td>" . $row['p_name'] . "</td>";

  echo "<td>" . $row['symbol'] . "</td>";



  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($con);

?>

</body>

</html>