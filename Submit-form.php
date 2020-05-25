<?php 
        $mysqli = new mysqli('localhost', 'root', '', 'web') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
?>