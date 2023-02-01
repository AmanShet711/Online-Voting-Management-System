<?php
include 'connect.php';
$conn = OpenCon();
$w_id=$_POST['w_id'];
$w_name=$_POST['w_name'];
$w_address=$_POST['w_address'];
$stmt = $conn->prepare("INSERT INTO ward (w_id, w_name, w_address) VALUES (?,?,?)");
$stmt->bind_param("iss",$w_id,$w_name,$w_address);
$execval=$stmt->execute();
if($execval){
    echo '<script>
            alert("You have successfully registered a Ward");
            window.location = "../dashboard.html";
    </script>';
}
else{
    echo '<script>
                alert("Ward ID Already Exists");
                window.location = "../dashboard.html";
            </script>
        ';
}
$stmt->close();
CloseCon($conn);
?>