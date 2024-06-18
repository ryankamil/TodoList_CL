<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Ucup");
addTodoList("Cuplis");
addTodoList("Dimas");

var_dump($todoList);
