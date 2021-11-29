<?php
require '../conn.php';

if(isset($_GET['up'])){
    $noID = $_GET['up'];
    $sql="SELECT * FROM staff WHERE idstaff=$noID";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $rows = $result->fetch_array();
    
    $idstaff=$rows['idstaff'];
    $idpengguna=$rows['idpengguna'];
    $staff_name=$rows['staff_name'];
      
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data</title>
</head>
<style>
    *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        body{
            background: skyblue;
            font-family: Arial, Helvetica, sans-serif;
        }
</style>
<body>
<div class="container">
        <h1>KEMASKINI DATA STAFF</h1>
        <hr>
        <div class="row">
           <div class="col-md-8">
               <?php 
               echo "<form action='staff_update2.php?up=$noID' method='post'>"
               ?>
               
                    <table>
                        <tr>
                          <th>Id Pengguna</th>
                          <td><input required type="text" class="form-control" name="idpengguna" value="<?php echo "$idpengguna"?>"></td>  
                        </tr>
                        <tr>
                          <th>Staff name</th>
                          <td><input required type="text" class="form-control" name="staff_name"  value="<?php echo "$staff_name"?>"></td>  
                        </tr>
                        </table>
                        <hr>
                        <div class="form-group">
                            <button id="btn" name="submit" type="submit" class="btn btn-primary">Update</button>
                   </div>
               </form>
           </div>
            
        </div>
    </div>
</body>
</html>
	