<?php 

$mysqli = new mysqli('localhost', 'root', '', 'web') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($mysqli->query("INSERT INTO data (name, surname, username, password) VALUES ('$name', '$surname', '$username', '$password')"))
    {
        header("Location:show.php");
        exit;
    }   
}

?>