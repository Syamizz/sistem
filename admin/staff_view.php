<?php
require '../conn.php';
    $query="select * from staff";
    $result=mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<style>
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        body{
            background: skyblue;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th{
            background: orange;
        }
    </style>
<body>
<h1>Senarai staff</h1>
<div class="col-md-12 ">
            <table align="center" style="width:1200px; line-height:40px;">
                <tr>
                    <th>Bil</th>
                    <th>Id Pengguna</th>
                    <th>Staff Name</th>
                    <th colspan='3'>Action</th>
                </tr>
                <?php
                $bil=1;
                while($rows=mysqli_fetch_assoc($result)){
                    $idstaff=$rows['idstaff'];
                    $idpengguna=$rows['idpengguna'];
                    $staff_name=$rows['staff_name'];

                    echo '<tr>';
                    echo "<td>$bil</td>";
                    echo "<td>$idpengguna</td>";
                    echo "<td>$staff_name</td>";
                    echo "<td> <a class='btn btn-danger' href='staff_reset.php?reset=$idstaff'>Reset password</a></td>";
                    echo "<td> <a class='btn btn-success' href='staff_update.php?up=$idstaff'>Update</a></td>";
                    echo "<td> <a class='btn btn-danger' href='staff_delete.php?del=$idstaff'>Delete</a></td>";
                    
                    $bil++;
                }
                ?>
                
            </table><br><br><br>
            <form action="staff_insert.php">
                <input  id="btn" type="submit" value="Insert data" />
            </form>
        </div>
</body>
</html>