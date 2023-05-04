<?php 

    $_GET["paragrafo"];
    $_GET["parola"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/script.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <form action="censura.php" method="POST">
        <label for="paragrafo">Inserisci un testo</label>
        <input type="text" name="paragrafo" id="paragrafo">
        <label for="parola">Inserisci una parola da censurare</label>
        <input type="text" name="parola" id="parola">
        <input type="submit" value="Conferma">
    </form>
</body>
</html>