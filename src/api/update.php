<?php 

require_once('../../database/conn.php');

$title = filter_input(INPUT_POST, 'title');
$id = filter_input(INPUT_POST, 'id');

if ($title && $id) {
    $sql = $pdo->prepare("UPDATE task SET title = :title WHERE id = :id");
    $sql->bindValue(':title', $title);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header('Location: ../../index.php');
    exit;
} else {
    header('Location: ../../index.php');
    exit;
}