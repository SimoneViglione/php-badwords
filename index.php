<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

    <h1> Parolacce simulator </h1>

    <form action="censura.php" method="get">
        <label for="paragraph">Inizia a scrivere</label><br>
        <input type="text" name="paragraph" id="paragraph"><br><br>

        <label for="parolaccia">Digita la parola da censurare</label><br>
        <input type="text" name="badword" id="parolaccia"><br><br>
    
        <button type="submit"> Invia </button>
    </form>
</body>
</html>
