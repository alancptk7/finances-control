<?php

require_once "config/connection.php";

if (isset($_POST['submit'])) {

    $sql = $conn->prepare("INSERT INTO control(descricao, valor, tipo) VALUES (?,?,?)");
    $sql->execute(array($_POST['desc'], $_POST['amount'], $_POST['type']));

    header("location: index.php");
    exit;
}
