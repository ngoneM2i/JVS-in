<?php
$cp = $_POST['cp'];
$query = "SELECT IDville, ville FROM villes WHERE codePostal LIKE '$cp%' ORDER BY ville";
$cn = new mysqli('localhost', 'root', "", 'stage');
$rs = mysqli_query($cn, $query);
$data = array();
while ($row = $rs->fetch_array(MYSQLI_NUM)) {
    $data[] = $row;
}

mysqli_close($cn);
echo json_encode($data);