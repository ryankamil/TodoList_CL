<?php
/*
Display todo di list
*/

function showTodoList()
{
    global $todoList;

    echo "TODOLIST" . PHP_EOL;
    // detail array or object 
    foreach ((array)$todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
