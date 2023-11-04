<?php
class TaskController {
    public static function showMain(){
        
        require("../models/Task.php");
        
        $tasks = Task::getAll();

        include("../views/tasks.php");
    }
    public static function delete($id){
        require("../models/Task.php");
        Task::delete($id);
        header("Location: /PHP_ToDoList");
    }
    public static function create(){
        require("../models/Task.php");
        include("../views/createTask.php");
    }
    public static function createRequest($title, $description){
        require("../models/Task.php");
        Task::create($title, $description);
    }
}
?>