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
        <input type="text" name="nameTitle" value="" placeholder="Vul naam van acteur of film in" maxlength="255">

        <input type="checkbox" name="genre" id="action" value="action">
        <label for="genre">Action</label>

        <input type="checkbox" name="genre" id="adventure" value="adventure">
        <label for="genre">Adventure</label>

        <input type="checkbox" name="genre" id="animation" value="animation">
        <label for="genre">Animation</label>

        <input type="checkbox" name="genre" id="biography" value="biography">
        <label for="genre">Biography</label>

        <input type="checkbox" name="genre" id="comedy" value="comedy">
        <label for="genre">Comedy</label>

        <input type="checkbox" name="genre" id="crime" value="crime">
        <label for="genre">Crime</label>

        <input type="checkbox" name="genre" id="drama" value="drama">
        <label for="genre">Drama</label>

        <input type="checkbox" name="genre" id="horror" value="horror">
        <label for="genre">Horror</label>

        <input type="checkbox" name="genre" id="music" value="music">
        <label for="genre">Music</label>

        <input type="checkbox" name="genre" id="mystery" value="mystery">
        <label for="genre">Mystery</label>

        <input type="checkbox" name="genre" id="romance" value="romance">
        <label for="genre">Romance</label>

        <input type="checkbox" name="genre" id="thriller" value="thriller">
        <label for="genre">Thriller</label>

        <input type="checkbox" name="genre" id="war" value="war">
        <label for="genre">War</label>

        <input type="submit" name="submit" value="Zoeken">
    </form>

    <hr>

    <?php //Roep functie op die resultaten toont. ?>

</body>
</html>