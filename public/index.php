
<?php
require_once '../config/config.php';
$uri = str_replace("/PHP_ToDoList/", "", $_SERVER['REQUEST_URI']);
include('../controllers/TaskController.php');

if($uri == ""){
    TaskController::showMain();
} else if(strpos($uri, "delete") === 0){
    TaskController::delete($_GET['id']);
} else if(strpos($uri, "createRequest") === 0) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    TaskController::createRequest($title, $description);
} else if(strpos($uri, "create") === 0){
    TaskController::create();
}

?>