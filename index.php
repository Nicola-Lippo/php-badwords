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
                <div>
                    <label for="text">Inserisci un testo</label>
                </div>
                <!--NB. L'attributo Name serve per passare qul valore alla pagina di ricezione-->
                <textarea id="text" name="testo"></textarea>
            </div>
            <!--PAROLA DA RIMUOVERE-->
            <div>
                <div>
                    <label for="censored">Parola da rimuovere</label>
                </div>
                <input type="text" id="censored" name="censura">
            </div>
            <!--BOTTONE INVIO-->
            <div>
                <button>Invia i tuoi dati al server</button>
            </div>
        </div>
    </form>
</body>

</html>