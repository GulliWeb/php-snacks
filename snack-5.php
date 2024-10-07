<?php
$word = ($_GET['txtWord']);

//Funzione che verifica se la frase ricevuta in input dall'utente è palindroma
function isPalindrome( $word ){
    // Controlli
    if($word == ''){
        echo('Attenzione, inserire una parola!');
        return;
    }
    // Controllo se è palindroma o meno
    $isPalindroma = '';
    for ($i = strlen($word )- 1 ; $i >= 0 ; $i--) { 
        $isPalindroma .= $word[$i];
    };
    
    if( $isPalindroma == $word){
        echo('la parola è palindroma');
    } else{
        echo('La parola non è palindroma');
    };
}

// Chiamo la funzione se il campo word non è vuoto
if ($word !== '') {
    isPalindrome($word);
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
    <form action="" method="get">
        <label for="txtWord">Inserisci una parola</label>
        <input type="text" id="txtWord" name="txtWord">
        <button type="submit">
            Verifica se è palindroma!
        </button>
    </form> 
</body>
</html>