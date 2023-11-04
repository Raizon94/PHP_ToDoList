<?php

include("components/header.php");
?>
<div class="container my-10">
    <a href="/PHP_ToDoList/create" class="cursor-pointer bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
        Create Task
    </a>
</div>
<div class="grid grid-flow-row-dense grid-cols-3 grid-rows-3 container">
    <?php
    foreach($tasks as $task) {
        include("components/task.php");
    }
    ?>
</div>
<?php
include("components/footer.php");
?>
