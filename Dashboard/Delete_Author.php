<?php
include './api/sql.php';

$ConnectTOtable = $conn->prepare("DELETE FROM authors WHERE id= :id");
// execute the table

$ConnectTOtable->execute([
    "id" => $_GET["id"]
]);

$conn=null;

header("Location: Authors.php");
?>