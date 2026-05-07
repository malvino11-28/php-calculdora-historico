<?php
    include 'config.php';

    // $sql = "SELECT * from calc";
    $result = pg_query("SELECT * FROM calc");
    if (!$result) {
        echo 'An error ocurred';
        exit();
    }

?>

