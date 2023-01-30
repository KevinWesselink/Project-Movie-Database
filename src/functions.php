<?php
include '../database/db.php';

if (isset($_POST['submit'])) {
    global $conn;

    $nameTitle = $_POST['nameTitle'];
    $action = $_POST['action'];
    $adventure = $_POST['adventure'];
    $animation = $_POST['animation'];
    $biography = $_POST['biography'];
    $comedy = $_POST['comedy'];
    $crime = $_POST['crime'];
    $drama = $_POST['drama'];
    $horror = $_POST['horror'];
    $music = $_POST['music'];
    $mystery = $_POST['mystery'];
    $romance = $_POST['romance'];
    $thriller = $_POST['thriller'];
    $war = $_POST['war'];

    $sql = "SELECT * FROM movies WHERE name LIKE '%$nameTile%' OR genre LIKE '%$action%' OR genre LIKE '%$adventure%' OR genre LIKE '%$animation%' OR genre LIKE '%$biography%' OR genre LIKE '%$comedy%' OR genre LIKE '%$crime%' OR genre LIKE '%$drama%' OR genre LIKE '%$horror%' OR genre LIKE '%$music%' OR genre LIKE '%$mystery%' OR genre LIKE '%$romance%' OR genre LIKE '%$thriller%' OR genre LIKE '%$war%'";
    $sth = $conn->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo $row['name'] . '<br>';
        echo $row['genre'] . '<br>';
        echo $row['year'] . '<br>';
        echo $row['director'] . '<br>';
        echo $row['actors'] . '<br>';
        echo $row['description'] . '<br>';
        echo $row['image'] . '<br>';
    }
}
?>