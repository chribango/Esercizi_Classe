<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Codifica in Codice Morse</title>
</head>
<body>
<form action="" method="post">
    <label for="messaggio"><H1>Messaggio da criptare:<H1></label><br>
    <input type="text" style="width: 300px; height: 30px; id="messaggio" name="messaggio"<br>
    <button type="submit">Codifica</button><br>

<?php
    $Codifica = array(
            'A' => '.-',    'B' => '-...',  'C' => '-.-.',  'D' => '-..',   'E' => '.',
            'F' => '..-.',  'G' => '--.',   'H' => '....',  'I' => '..',    'J' => '.---',
            'K' => '-.-',   'L' => '.-..',  'M' => '--',    'N' => '-.',    'O' => '---',
            'P' => '.--.',  'Q' => '--.-',  'R' => '.-.',   'S' => '...',   'T' => '-',
            'U' => '..-',   'V' => '...-',  'W' => '.--',   'X' => '-..-',  'Y' => '-.--',
            'Z' => '--..',
            'a' => '.-',    'b' => '-...',  'c' => '-.-.',  'd' => '-..',   'e' => '.',
            'f' => '..-.',  'g' => '--.',   'h' => '....',  'i' => '..',    'j' => '.---',
            'k' => '-.-',   'l' => '.-..',  'm' => '--',    'n' => '-.',    'o' => '---',
            'p' => '.--.',  'q' => '--.-',  'r' => '.-.',   's' => '...',   't' => '-',
            'u' => '..-',   'v' => '...-',  'w' => '.--',   'x' => '-..-',  'y' => '-.--',
            'z' => '--..',
            '0' => '-----', '1' => '.----', '2' => '..---', '3' => '...--', '4' => '....-',
            '5' => '.....', '6' => '-....', '7' => '--...', '8' => '---..', '9' => '----.',
            '.' => '.-.-.-', ',' => '--..--', '?' => '..--..', '/' => '-..-.', '-' => '-....-',
            '(' => '-.--.', ')' => '-.--.-', ' ' => '/'
    );

    $input = $_POST['messaggio'];
    $morse = '';
    $Elaborato = str_split($input);
    $dim = count($Elaborato);

    for ($i = 0; $i < $dim; $i++) {
        $char = $Elaborato[$i];
        if (isset($Codifica[$char])) {
            $morse .= $Codifica[$char] . ' ';
        } else {
            $morse .= '? '; // Carattere non riconosciuto
        }
    }
    echo $morse;
?>
</form>
</body>
</html>
