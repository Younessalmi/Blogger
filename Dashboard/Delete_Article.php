<?php
include './api/sql.php';

$ConnectTOtable = $conn->prepare("DELETE FROM articles WHERE id= :id");
// execute the table

$ConnectTOtable->execute([
    "id" => $_GET["id"]
]);

$conn=null;

header("Location: articles.php");
?>