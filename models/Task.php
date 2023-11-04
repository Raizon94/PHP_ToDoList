<?php
class Task {
    
    protected $id;
    protected $title;
    protected $description;
    public function __construct($id, $title, $description) { 
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        
    }
    public static function getAll(){
        $conn = require("../db/connection.php");
        $sql = "SELECT id, title, description FROM tasks";
        $res = $conn->query($sql);
        $tasks = [];
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $tasks[] = $row;
        }
        return $tasks;
    }
    public static function delete($id){
        $conn = require("../db/connection.php");
        $sql = "DELETE FROM tasks WHERE id = " . $id;
        $res = $conn->query($sql);
    }
    public static function create($title, $description){
        $conn = require("../db/connection.php");
        $sql = "INSERT INTO tasks (title, description) VALUES ('" . $title . "', '" . $description . "')";
        $res = $conn->query($sql);
        
        header("Location: /PHP_ToDoList");
    }
}

?>