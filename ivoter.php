<?php
include 'connect.php';
$conn = OpenCon();
$v_id=$_POST['v_id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$w_id = $_POST['w_id'];
$ph_no = $_POST['ph_no'];
$stmt = $conn->prepare("INSERT INTO voter (v_id, name, gender, w_id, ph_no) VALUES (?,?,?,?,?)");
$stmt->bind_param("issii",$v_id,$name,$gender, $w_id, $ph_no);
$execval=$stmt->execute();
if($execval){
    echo '<script>
            alert("You have successfully registered a Voter");
            window.location = "../dashboard.html";
    </script>';
}
else{
    echo '<script>
                alert("Voter ID Already Exists");
                window.location = "../dashboard.html";
            </script>
        ';
}
$stmt->close();
CloseCon($conn);
?>