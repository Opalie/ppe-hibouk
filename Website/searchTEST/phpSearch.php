<?php

include '_dbSettings.php';

$search = $_GET['search'];

$sql = "SELECT * FROM articles WHERE (`title` LIKE '%" . $search . "%'";

$result = $bdd->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["name"] . "  " . $row["age"] . "  " . $row["gender"] . "<br>";
    }
} else {
    echo "0 records";
}

$conn->close();
