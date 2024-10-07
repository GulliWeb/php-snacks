<?php
$word = 'txtWord';

//Funzione che verifica se la frase ricevuta in input dall'utente è palindroma
function( $word ){
    // Controlli
    if($word == ''){
        echo('Attenzione, inserire una parola!');
        return;
    }
    // Controllo se è palindroma o meno
    $isPalindroma = '';
    for ($i = strlen($word )- 1 ; $i >= 0 ; $i--) { 
        $isPalindroma += $i;
    };
    
    if( $isPalindroma == $word){
        echo('la parola è palindroma');
    } else{
        echo('La parola non è palindroma');
    };
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PALINDROMA FUNCTION PHP</title>
</head>
<body>
    <form action="">
        <label for="txtWord">Inserisci una parola</label>
        <input type="text" id="txtWord" name="txtWord">
    </form>

    <button type="submit">
        Verifica se è palindroma!
    </button>
    
</body>
</html>