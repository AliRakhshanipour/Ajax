<?php
include_once "conf.php";
sleep(2);

$sql = "INSERT INTO province (name) VALUES (?)";
$stmt = $db->prepare($sql);
$stmt->execute([$_POST['data']]);
echoline($_POST['data']." با موفقیت اضافه شد.");
