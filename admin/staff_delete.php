<?php
    require '../conn.php';
	error_reporting(0);
	$staffId = $_GET['del'];
    $sql = "DELETE FROM staff where idstaff = ? ";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $staffId);
    $stmt->execute();
    ?><script>
    alert('Data telah dipadam')
    window.location='staff_view.php'
</script>