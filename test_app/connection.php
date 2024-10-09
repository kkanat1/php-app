<?php
require_once('config.php');

// PDOクラスのインスタンス化
function connectPdo()
{
    try {
        return new PDO(DSN, DB_USER, DB_PASSWORD);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
}

function createTodoData($todoText)
{
    $dbh = connectPdo();
    $sql = 'INSERT INTO todos (content) VALUES ("' . $todoText . '")';
    $dbh->query($sql);
}

function getAllRecords(){
    $dbh = connectPdo();
    $sql = 'SELECT * FROM todos WHERE deleted_at IS NULL';
    return $dbh->query($sql)->fetchAll();
}

// update
function updateTodoData($post){
    $dbh = connectPdo();
    $sql = 'UPDATE todos SET content = "' . $post['content'] . '" WHERE id = ' . $post['id'];
    $dbh->query($sql);
}

function getTodoTextById($id){
    $dbh = connectPdo();
    $sql = "SELECT * FROM todos WHERE deleted_at IS NULL AND id = {$id}";
    // var_dump($sql);
    // var_dump($dbh);
    // exit;
    $data = $dbh->query($sql)->fetch();
    return $data['content'];
}