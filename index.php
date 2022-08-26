

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>



    <form action="" method="get">

    <table>
    <thead>
    <tr>

    <td>ID</td>

    <td>Type</td>

    <td>Color</td>

  </tr>

  <?php

  $res = file_get_contents("https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items");

  
  $arr = json_decode($res, true); //Convertir JSON a ARRAY

  $Array[]= array();

    foreach($arr as  $value) {
      if($value["color"]=="green"){
        // array_push($Array,$value["id"],$value["type"],$value["color"]);
        $Array = $value;
        echo"<tr>
        <td>".$value["id"]."</td>
        <td>".$value["type"]."</td>
        <td>".$value["color"]."</td>
        </tr>";
      }
    }

    $file = 'clientes.json';
    
    // file_put_contents($file, json_encode($Array));
?>

    </table>
    </form>

    <button type="button" onclick="file_put_contents($file, json_encode($Array));">VOLVER</button>
</body>
</html>