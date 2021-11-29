<?php
require '../conn.php';
if(isset($_POST['submit'])){
    $idpengguna = $_POST['idpengguna'];
    $staff_name = $_POST['staff_name'];
    $katalaluan = $_POST['katalaluan'];
    $password_encrypted = password_hash($katalaluan, PASSWORD_BCRYPT);

    $sql="INSERT INTO staff(idpengguna,staff_name,katalaluan) VALUES(?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss',$idpengguna,$staff_name,$password_encrypted);
    $stmt->execute();
    header("Location: staff_view.php");
    die;
}
?>