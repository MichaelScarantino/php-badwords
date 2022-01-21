<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
    <?php 
        // Variabile stringa
        $my_text = 'Il calcio è un’arte che consente di comprimere tutta la storia in novanta minuti: andate là fuori e scrivete questa storia!';
        // Variabile con funzione per calcolare la lunghezza della stringa
        $my_text_length = strlen($my_text);
    ?>
    <h2>STAMPO LA VARIABILE E LA SUA LUNGHEZZA</h2>
    <p>
        <?php echo $my_text . ' Lunghezza: ' . $my_text_length ?>
    </p>

    <!-- Una parola da censurare viene passata dall'utente tramite parametro GET. -->
    <?php
        $word = $_GET["word"];
        $word_changed = '***';
        // Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
        $replace_word = str_replace($word, $word_changed, $my_text );
        $replace_word_length = strlen($replace_word);
    ?>
    <h2>STAMPO DI NUOVO LA VARIABILE SOSTITUENDO LA PAROLA CENSURATA</h2>
    <p>
    <?php echo $replace_word . ' Lunghezza: ' . $replace_word_length ?>
    </p>
</body>
</html>