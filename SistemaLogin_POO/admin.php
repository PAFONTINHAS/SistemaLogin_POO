<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Não sei</title>
</head>
<body>
    <div>
        <h2>Olá <?php echo $_SESSION['login']; ?>!</h2>

        <a href="logout.php">Sair</a>
    </div>
</body>
</html>

