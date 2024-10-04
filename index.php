<!-- SNACK 2 -->
<?php
// Raccolgo le varibili dall'invio dei dati del mio form
$name = isset(($_GET ["txtName"]));
$mail = isset($_GET["txtMail"]);
$age = isset(($GET ["numAge"]));

// Verifico le condizioni 
if(strlen($name) >= 3 && str_contains($mail, ".") && is_numeric($age)){
    echo("Campi corretti");
} else{
    echo("Campi non corretti");
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php SNACK</title>
</head>
<body>
    <!-- Raccolta dati tramite l'input dall'utente -->
    <form action="index.php" method="GET">
        <input type="text" name="txtName" id="txtName" placeholder="inserisci il tuo nome">
        <input type="text" name="txtMail" id="txtMail" placeholder="inserisci la tua mail">
        <input type="number" name="numAge" id="numAge" min="0" max="99">
        <button type="submit" id="btnSubmit">
            Invia i dati
        </button>
        <button id="btnReset" type="reset">
            pulisci i campi
        </button>
    </form>
</body>
</html>