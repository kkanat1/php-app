<?php
require_once('connection.php');

function getTodoList(){
  return getAllRecords();
}

function getSelectedTodo( $id ){
  return getTodoTextById($id);
}

function savePostedData($post)
{
    $path = getRefererPath();
    switch ($path) {
        case '/new.php':
            createTodoData($post['content']);
            break;
        case '/edit.php':
            updateTodoData($post);
            break;
        case '/index.php':
            deleteTodoData($post['id']);
        default:
            break;
    }
}

function getRefererPath()
{
    $urlArray = parse_url($_SERVER['HTTP_REFERER']);
    // var_dump($urlArray);
    // var_dump($_SERVER);
    // exit();
    return $urlArray['path'];
}