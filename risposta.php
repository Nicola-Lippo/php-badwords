<?php
//richiamo textarea dal form
$testo = $_GET['testo'];
//lunghezza del paragrafo originale
$testo_lung = strlen($testo);
//parola da censurare
$censored = $_GET['censura'];
//paragrafo censurato con parola sostituita
$censored_text = str_replace($censored, '* * *', $testo);
//lunghezza censurati
$censored_lung = strlen($censored_text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords - risposta</title>
</head>

<body>
    <h2>Originali</h2>
    <div><?php echo $testo; ?></div>
    <div><?php echo $testo_lung; ?></div>
    <hr>
    <h2>Censurati</h2>
    <div><?php echo $censored_text; ?></div>
    <div><?php echo $censored_lung; ?></div>


</body>

</html>