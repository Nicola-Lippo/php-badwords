<?php
//richiamo variabili del form
$testo = $_GET['testo'];
//lunghezza del paragrafo
$testo_lung = strlen($testo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords - risposta</title>
</head>

<body>
    <div><?php echo $testo; ?></div>
    <div><?php echo $testo_lung; ?></div>

</body>

</html>