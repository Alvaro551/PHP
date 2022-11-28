<?php
$fonema = array("a", "i", "u", "e", "o", "ka", "ki", "ku", "ke", "ko", "sa", "shi", "su", "se", "so", "ta", "chi", "tsu", "te", "to", "na", "ni", "nu", "ne", "no", "ha", "hi", "fu", "he", "ho");
$hiragana2 = array("あ", "い", "う", "え", "お", "か", "き", "く", "け", "こ", "さ", "し", "す", "せ", "そ", "た", "ち", "つ", "て", "と", "な", "に", "ぬ", "ね", "の", "は", "ひ", "ふ", "へ", "ほ");

$index = isset($_POST['index']) ? $_POST['index'] : 0;
$message2 = ($hiragana2[$index]);
if (!isset($_POST['guess'])) {
    $message1 = "<h1>Bienvenido al juego!</h1></br>";
    $message2 = ($hiragana2[$index]);
} elseif ($_POST['guess'] == $fonema[$index]) {
    $message1 = "<h1>Acierto!</h1></br>";
    $index++;
    if ($index < count($fonema)) {
        $message2 = ($hiragana2[$index]);
    }
} elseif ($_POST['guess'] != $fonema[$index]) {
    $message1 = "<h1>Incorrecto!</h1></br>";
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Juego!</title>
</head>

<body>

    <?php
    echo $message1;
    if ($index < count($fonema)) {
    ?>
        <b>Intenta adivinar el caracter:</b> <?php echo $message2; ?>
        <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST" enctype="multipart/form-data">
            <p><label for="guess">Introduce la respuesta:</label>
                <input type="text" id="guess" name="guess" />
            </p>
            <input type="hidden" name="index" value="<?php echo $index; ?>">
            <button type="submit" name="submit" value="submit">Adivinar</button>
        </form>
        <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST" enctype="multipart/form-data">
            <button type="submit" name="Reset" value="submit">Reset</button>
        </form>
    <?php
    } else {
    ?>
        <b>Juego acabado!</b>
        <p><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Jugar de Nuevo</a></p>
    <?php
    }

    ?>