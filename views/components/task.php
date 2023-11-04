<div class="py-3 max-w-sm rounded overflow-hidden shadow-lg mx-auto">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2"><?php echo $task['title'] ?></div>
        <p class="text-gray-700 text-base">
         <?php echo $task['description']; ?>
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <a href="/PHP_ToDoList/delete?id=<?php echo $task['id'] ?>" class="cursor-pointer bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
            DELETE
        </a>
    </div>
</div>