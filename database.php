<?php
function dbConnect() {
    try {
        $bdd = new PDO(
            'mysql:host=localhost;dbname=myecomontre;charset=utf8',
            'root',
            ''
            );
    } catch(PDOException $e) {
        die($e->getMessage());
    }
    return $bdd;
}


