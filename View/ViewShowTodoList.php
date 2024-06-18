<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewRemoveTodoList.php";
require_once "Helper/Input.php";

/**
 * Menu Pilihan
 * # Tampil todo
 * 1.Tambah data
 * 2.Hapus data
 */

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "Menu :" . PHP_EOL;
        echo "1. Add Todo " . PHP_EOL;
        echo "2. Delete Todo" . PHP_EOL;
        echo "3. Exit " . PHP_EOL;

        $selected = input("Select :");
        if ($selected == "1") {
            viewAddTodoList();
        } else if ($selected == "2") {
            viewRemoveTodoList();
        } else if ($selected == "x") {
            break;
        } else {
            echo "option not found" . PHP_EOL;
        }
    }
    echo "See you next time ! " . PHP_EOL;
}
