<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "compre trufas";

    //variaveis de conexão
    $servidor="localhost";
    $usuario="escola";
    $senha="123";
    $nomedb="escola";
    //conexão
    $conn= new mysqli($servidor, $usuario, $senha, $nomedb);
    //checa conexão
    if ($conn->connect_error){
        die("Conexao falhou: " . $conn->connect_error);
    }
    echo"Conectado ao banco de dados"."<br>";

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - nome: " . $row["sobrenome"]. " " . $row["numero de telefone"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

    ?>
  
</body>
</html>