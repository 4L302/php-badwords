<?php 

    $paragrafo = $_POST["paragrafo"];
    $parola = $_POST["parola"];
    $paragrafo2 = str_replace($parola, '***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php echo$paragrafo2 ?>
    </p>

    <div>
        <h2>
            Il testo contiene <?php echo strlen($paragrafo2);?> caratteri
        </h2>
    </div>
</body>
</html>