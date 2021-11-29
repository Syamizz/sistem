<?php
    require '../conn.php';
    
    $id = $_GET['up'];
    $idpengguna = $_POST['idpengguna'];
    $staff_name = $_POST['staff_name'];

    $sql = "UPDATE staff SET idpengguna = ?, staff_name = ?  WHERE idstaff =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssi', $idpengguna, $staff_name,$id);
    $stmt->execute();

    if ($conn->error) {
        ?>
        <script>
            alert('Maaf! Nama tersebut sudah wujud dalam senarai');
            window.location = 'staff_view.php';
        </script>
        <?php
        exit;
    } else {
        header('location: staff_view.php');
    }