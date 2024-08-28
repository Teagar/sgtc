<?php 
ob_start();

require_once('../../index.php');

$title = filter_input(INPUT_POST, 'title');

if ($title) {
    $sql = $pdo->prepare("INSERT INTO task (title) VALUES (:title)");
    $sql->bindValue(':title', $title);
    $sql->execute();

    header('Location: ../../index.php');
    exit;
} else {
    header('Location: ../../index.php');
    exit;
}

ob_end_flush();
?>
