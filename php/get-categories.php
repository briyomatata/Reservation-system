<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM categories");

$stmt->execute();

$categories = $stmt->get_result();

?>