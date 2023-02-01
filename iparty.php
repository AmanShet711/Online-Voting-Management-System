<?php
include 'connect.php';
$conn = OpenCon();
$p_id=$_POST['p_id'];
$p_name=$_POST['p_name'];
$symbol=$_POST['symbol'];
$stmt = $conn->prepare("INSERT INTO party (p_id, p_name, symbol) VALUES (?,?,?)");
$stmt->bind_param("iss",$p_id,$p_name,$symbol);
$execval=$stmt->execute();
if($execval){
    echo '<script>
            alert("You have successfully registered a Party");
            window.location = "../dashboard.html";
    </script>';
}
else{
    echo '<script>
                alert("Party ID Already Exists");
                window.location = "../dashboard.html";
            </script>
        ';
}
$stmt->close();
CloseCon($conn);
?>