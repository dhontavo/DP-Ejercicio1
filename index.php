

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Ejercicio 1</title>
</head>
<body>


  <div class="container font">
    <div class="row">
      <div class="col">&nbsp;</div>
      <div class="col">
        <h1>Ejercicio#1</h1>
      </div>
      <div class="col">&nbsp;</div>
    </div>
  </div>

  <div>&nbsp;</div>
    <form action="" method="get">

    <div class="container">
      <div>
      <div class="col-sm"></div>
      <div class="col">
            <table class="table table-striped">
              <thead class="thead-dark">
              <tr>
              <th scope="col">ID</th>
              <th scope="col">Type</th>
              <th scope="col">Color</th>
              </tr>
              </thead>
            <tbody>
            <?php

                $res = file_get_contents("https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items");


                $arr = json_decode($res, true); //Convertir JSON a ARRAY

                $Array[]= array();

                foreach($arr as  $value) {
                    if($value["color"]=="green"){

                      $Array = $value; // Agregar elementos a un array
                      // contenido de la Tabla
                      echo"<tr>
                      <td>".$value["id"]."</td>
                      <td>".$value["type"]."</td>
                      <td>".$value["color"]."</td>
                      </tr>";
                    }
                }

                $file = 'Respuesta1.json';
                file_put_contents($file, json_encode($Array));

            ?>

            </tbody>

            </table>
      </div>
      <div class="col-sm"></div>
      </div>
     
    </div>
    </form>
    <br>
    
   <div class="container">
   <div class="row">
      <div class="col">&nbsp;</div>
      <div class="col">&nbsp;</div>
      <div class="col">
        <div class="row">
        <div class="col">&nbsp;</div>
        <a href="descarga.php" class="btn btn-success">Descarga</a>
        <!-- <button href="descarga.php" class="btn btn-success">Descarga</button> -->
        <div class="col">&nbsp;</div>
        </div>
      </div>
    </div>
   </div>
  
</body>
</html>