<?php
include "../database/db.php";
include '../src/functions.php';
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css?=v180120231419">
    <title>Movie Database</title>
</head>
<body>
    <form method="post" name="search">
        <input type="text" name="nameTitle" id="nameTitle" value="" placeholder="Vul naam van acteur of film in" maxlength="255">

        <input type="checkbox" name="action" id="action" value="action">
        <label for="genre">Actie</label>

        <input type="checkbox" name="adventure" id="adventure" value="adventure">
        <label for="genre">Avontuur</label>

        <input type="checkbox" name="animation" id="animation" value="animation">
        <label for="genre">Animatie</label>

        <input type="checkbox" name="biography" id="biography" value="biography">
        <label for="genre">Biografie</label>

        <input type="checkbox" name="comedy" id="comedy" value="comedy">
        <label for="genre">Komedie</label>

        <input type="checkbox" name="crime" id="crime" value="crime">
        <label for="genre">Misdaad</label>

        <input type="checkbox" name="drama" id="drama" value="drama">
        <label for="genre">Drama</label>

        <input type="checkbox" name="horror" id="horror" value="horror">
        <label for="genre">Horror</label>

        <input type="checkbox" name="music" id="music" value="music">
        <label for="genre">Muziek</label>

        <input type="checkbox" name="mystery" id="mystery" value="mystery">
        <label for="genre">Mysterie</label>

        <input type="checkbox" name="romance" id="romance" value="romance">
        <label for="genre">Romantiek</label>

        <input type="checkbox" name="thriller" id="thriller" value="thriller">
        <label for="genre">Thriller</label>

        <input type="checkbox" name="war" id="war" value="war">
        <label for="genre">Oorlog</label>

        <input type="submit" name="submit" value="Zoeken">
    </form>

    <hr>

    <?php //Roep functie op die resultaten toont. ?>

</body>
</html>