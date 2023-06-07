<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP Page</title>
</head>
<body>
    <h1>Inserisci i tuoi dati</h1>
    <!-- creo un form per fra inserire i dati all'utente e inviarli al server -->
    <form action="receive.php" method="POST">
        <textarea name="paragraph" rows="5" cols="30" placeholder="Scrivi del testo"></textarea>
        <input type="text" name="wordCensored" placeholder="Scrivi la parola da censurare">
        <button type="submit">Submit</button>
    </form>
</body>
</html>