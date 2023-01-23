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

    <h1>Test</h1>

    <form method="post" name="search">
        <input type="text" name="nameTitle" value="" placeholder="Vul naam van acteur of film in" maxlength="255">

        <input type="checkbox" name="genre" value="">
        <label for="genre">Action</label>

        <input type="checkbox" name="genre" value="">
        <label for="genre">Adventure</label>

        <input type="checkbox" name="genre" value="">
        <label for="genre">Animation</label>

        <input type="checkbox" name="genre" value="">
        <label for="genre">Biography</label>

        <input type="checkbox" name="genre" value="">
        <label for="genre">Comedy</label>

        <input type="checkbox" name="genre" value="">
        <label for="genre">Crime</label>

        <input type="checkbox" name="genre" value="">
        <label for="genre">Drama</label>

        <input type="checkbox" name="genre" value="">
        <label for="genre">Horror</label>

        <input type="checkbox" name="genre" value="">
        <label for="genre">Music</label>

        <input type="checkbox" name="genre" value="">
        <label for="genre">Mystery</label>

        <input type="checkbox" name="genre" value="">
        <label for="genre">Romance</label>

        <input type="checkbox" name="genre" value="">
        <label for="genre">Thriller</label>

        <input type="checkbox" name="genre" value="">
        <label for="genre">War</label>

        <input type="submit" name="submit" value="Zoeken">
    </form>

    <hr>

    <?php //Roep functie op die resultaten toont. ?>

</body>
</html>