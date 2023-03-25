<?php
    $username = $_POST["username"];
    $tel = $_POST["tel"];
    $massege = $_POST["massege"];

    if (empty($username)) {
        echo "Вы не указали своё имя";
    } else {
        echo $username . "</br>";
        echo $tel . "</br>";
        echo $massege . "</br>";
    }