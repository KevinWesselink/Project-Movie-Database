<?php
include '../database/db.php';

if (isset($_POST['submit'])) {
    global $conn;

    $nameTitle = $_POST['nameTitle'];
    $gen_id1001 = $_POST['action'];
    $gen_id1002 = $_POST['adventure'];
    $gen_id1003 = $_POST['animation'];
    $gen_id1004 = $_POST['biography'];
    $gen_id1005 = $_POST['comedy'];
    $gen_id1006 = $_POST['crime'];
    $gen_id1007 = $_POST['drama'];
    $gen_id1008 = $_POST['horror'];
    $gen_id1009 = $_POST['music'];
    $gen_id1010 = $_POST['mystery'];
    $gen_id1011 = $_POST['romance'];
    $gen_id1012 = $_POST['thriller'];
    $gen_id1013 = $_POST['war'];

    //If statement om te kijken of er een naam is ingevuld, zoja query met naam, zo nee query zonder naam
    if (isset($nameTitle)) {
        //query zoekt alleen in movies tabel, niet in actors tabel
        $sql = "SELECT mov_title, mov_year, mov_time, mov_lang, mov_dt_rel, mov_rel_country WHERE mov_title LIKE '%:nameTitle%' FROM movies";
    } else {
        //query zoekt momenteel alleen maar via één genre, niet via meerdere genres
        $sql = "SELECT mov_title, mov_year, mov_time, mov_lang, mov_dt_rel, mov_rel_country WHERE gen_id :genre FROM movies";
    }

    $sth = $conn->prepare($sql);
    $sth->bindParam(':nameTitle', $nameTitle);
    $sth->bindParam(':genre', $gen_id1001);
    $sth->execute();

    $result = $sth->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo $row['mov_title'] . '<br>';
        echo $row['mov_year'] . '<br>';
        echo $row['mov_time'] . '<br>';
        echo $row['mov_lang'] . '<br>';
        echo $row['mov_dt_rel'] . '<br>';
        echo $row['mov_rel_country'] . '<br>';
    }
} else {
    echo "Je hebt geen zoekopdracht ingevuld";
}
?>