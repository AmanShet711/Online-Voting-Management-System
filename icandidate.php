<?php
function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Aman@0711";
$db = "aman";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}
$conn = OpenCon();
$c_id=$_POST['c_id'];
$c_name=$_POST['c_name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$p_id=$_POST['p_id'];
$w_id=$_POST['w_id'];
$votes=$_POST['votes'];
$stmt = $conn->prepare("INSERT INTO candidate (c_id, c_name, age, gender, p_id, w_id, votes) VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param("isisiii",$c_id,$c_name,$age,$gender,$p_id,$w_id,$votes);
$execval=$stmt->execute();
if($execval){
    echo '<script>
            alert("You have successfully registered as a Candidate");
            window.location = "../dashboard.html";
    </script>';
}
else{
    echo '<script>
                alert("Candidate ID Already Exists");
                window.location = "../dashboard.html";
            </script>
        ';
}
$stmt->close();
CloseCon($conn);
?>