<html>
<body>
<form action="Codice_Morse"method="post">
    Messaggio da criptare:
    <input type="text" id="messaggio" name="messaggio"><br>
    <button type="button"> Codifica</button><br>
    <input type="text" id="messaggio" name="messaggio2" disabled><br>
</form>

</body>
<?php
$Codifica=array(
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
    '(' => '-.--.', ')' => '-.--.-', ' ' => '/', // Usiamo '/' per lo spazio, una convenzione comune
    );
$Messaggio[]=$_POST['Messaggio'];
$Elaborato=str_split($_POST['Messaggio']);
$dim=count($Elaborato);
for($i=0; $i<$dim; $i++){
    if($Elaborato[$i]===
}

?>

</html>

