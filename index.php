<html>

<head>
<title>Cadastro de pessoa</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "3.88.222.254";
$username = "root";
$password = "Senha123";
$database = "contato";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_id =  rand(1, 999);
$valor_nome = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$valor_telefone = strtoupper(substr(bin2hex(random_bytes(4), 1));
$valor_email = strtoupper(substr(bin2hex(random_bytes(4), 1));

$query = "INSERT INTO pessoa (id, nome, telefone, email) VALUES ('$valor_id' , '$valor_nome', '$valor_telefone', '$valor_email')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>
