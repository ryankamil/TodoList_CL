<?php
require_once "BusinessLogic/RemoveTodoList.php";
require_once "Helper/Input.php";


function viewRemoveTodoList()
{
    echo "DELETED TODOLIST" . PHP_EOL;

    $selected = input("Nomer(x for close) :");

    if ($selected == "x") {
        echo "Cancel Todo" . PHP_EOL;
    } else {
        $success = removeTodoList($selected);

        if ($success) {
            echo "SUCCESS DELETE TODO Number $selected" . PHP_EOL;
        } else {
            echo "FAILED DELETE TODO Number $selected" . PHP_EOL;
        }
    }
}
