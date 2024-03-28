<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<link rel="stylesheet" href="style.css">

    <?php

    echo "compre trufas";

    include "conecta.php" ;   
    

    $sql = "SELECT id, nome, sobrenome FROM agenda";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - nome: " . $row["nome"]. " " . $row["sobrenome"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

    ?>
  
</body>
</html>