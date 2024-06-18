<?php

/**
 * Test Remove todo list
 */
require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

addTodoList("Udin");
addTodoList("cuplis");
addTodoList("didin");
addTodoList("dino");

showTodoList();

removeTodoList(1);
showTodoList();

removeTodoList(6);

// // check if remove success or not
$success =  removeTodoList(4);
var_dump($success);
