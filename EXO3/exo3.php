<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 3 EXO 3</title>
</head>

<body>
    <p>
        <?php
        $number1 = 0;
        $number2 = 2;
        while ($number1 >= 10) : ?>
    <p><?= $number1 * $number2; ?></p>
<?php $number1--;
        endwhile; ?>
</p>
</body>

</html>
