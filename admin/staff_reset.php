<?php
    require '../conn.php';
    
    $id = $_GET['reset'];
    $password = 'abc123';

    //PASSWORD_BCRYPT or PASSWORD_DEFAULT use any in the 2nd parameter
    //PASSWORD_BCRYPT always results 60 characters long string.
    //PASSWORD_DEFAULT capacity is beyond 60 characters

    $password_encrypted = password_hash($password, PASSWORD_BCRYPT);

    $sql = "UPDATE staff SET katalaluan = ?  WHERE idstaff =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $password_encrypted,$id);
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
        ?><script>
    alert('Kata laluan telah direset')
    window.location='staff_view.php'
</script><?php
    }