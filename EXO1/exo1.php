<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 3 EXO 1</title>
</head>

<body>
    <p>
        <?php
        $total = 0;
            for ($i = 0; $i < 10; $i++) {
            ($total += $i);}
                echo $total
        ?>
    </p>

</body>

</html>