<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second page PHP</title>
</head>
<body>
    <?php
    $paragraph = $_POST["paragraph"];
    $lengthParagraph = strlen($paragraph);
    ?>

    <h2> Ecco il tuo pragrafo: <?php echo $paragraph?> </h2>
    <small>E la sua lunghezza: <?php echo $lengthParagraph ?></small>

    <?php
    $word = $_POST["wordCensored"];
    $newParagraph = str_replace($word, "***", $paragraph);
    $lengthParagraph = strlen($newParagraph);
    ?>

    <h2>Ecco il pragrafo con parola censurata: <?php echo $newParagraph ?></h2>
    <small>E la sua lunghezza: <?php echo $lengthParagraph ?></small>
</body>
</html>