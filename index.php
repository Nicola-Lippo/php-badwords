<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <!--action indico dove inviare i dati method se get o post-->
    <form action="risposta.php" method="GET">
        <div>
            <!--CAMPO DI TESTO-->
            <div>
                <label for="text">Inserisci un testo</label>
                <input type="text" id="text">
            </div>
            <!--PAROLA DA RIMUOVERE-->
            <div>
                <label for="">Parola da rimuovere</label>
                <input type="text">
            </div>
            <!--BOTTONE INVIO-->
            <div>
                <button>Invia i tuoi dati al server</button>
            </div>
        </div>
    </form>
</body>

</html>