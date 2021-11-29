<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRUD</title>

    
  </head>

    <style>
        body{
            background: skyblue;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1,h2{
            color: black;
        }


        th{
            width: 180px;
            color: black;
        }

    </style>

  <body>
    <div class="container">
        <h2>Staff</h2>
        <hr>
        <p>Sila masukkan data staff baru</p>
        <div class="row">
           <div class="col-md-8">
               <form action="staff_insert2.php"method="post">
                    <table>
                        <tr>
                            <th>Id pengguna</th>
                            <td><input required type="text" class="form-control" name="idpengguna"></td>
                        </tr>
                        <tr>
                            <th>Staff name</th>
                            <td><input required type="text" class="form-control" name="staff_name"></td>
                        </tr>
                        <tr>
                            <th>Kata laluan</th>
                            <td><input required type="text" class="form-control" name="katalaluan"></td>
                        </tr>
                        
                    </table>
                    <hr>
                    <div class="form-group">
                       <button id="btn"name="submit" type="submit" class="btn btn-primary">Submit</button>
                   </div>
               </form>
           </div>
            
        </div>
    </div>
   
  </body>

</html>