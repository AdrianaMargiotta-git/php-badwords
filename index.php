<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP</title>

    <style>
        body {
            width: 100vw;
            height: 100vh;
            background: #98FF98;
            color: #E52B50;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            overflow: hidden;
        }
        p{
            padding: 10px 10px;
        }
        hr{
            width: 80%;
            color: #7FFF00;
        }
    </style>

    <?php
        // variabile con il "paragrafo" di partenza
        $par = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam doloribus perspiciatis animi modi, omnis facere rem earum delectus veritatis dignissimos et porro rerum ab natus excepturi consequatur est minima aperiam!";

        // variabile con metodo GET che mi permette di sostituire una parola in $par
        $badwords = $_GET['badwords'];

        // "paragrafo" modificato
        $parmod = str_replace($badwords, '***', $par);
    ?>

</head>
<body>
    <!-- stringa originale -->
    <p>La stringa di partenza è: <?php echo $par ?></p>
    <p>Ed è lunga <?php echo strlen($par) ?> caratteri.</p>
    <hr>
    <!-- stringa modificata -->
    <p>La parola da cambiare è: <?php echo $badwords ?></p>
    <p>La stringa modificata è: <?php echo $parmod ?></p>
    <p>Ed è lunga <?php echo strlen($parmod) ?> caratteri.</p>

    <!-- http://localhost/bcesercizi/php-badwords/index.php?badwords=consectetur -->
</body>
</html>