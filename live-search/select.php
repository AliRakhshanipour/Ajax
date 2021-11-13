<?php
include_once "conf.php";
$province = $_post["data"];
$sql = "SELECT `name` FROM province WHERE LIKE '%سی'";
$stmt = $db->prepare($sql);
$stmt->execute();
while ($row = $stmt->fetchAll()) {
    echo $row;
}
