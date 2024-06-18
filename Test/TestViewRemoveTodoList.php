<?php

require_once "View/ViewRemoveTodoList.php";
require_once "View/ViewShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Ucup");
addTodoList("tuplis");
addTodoList("udin");
addTodoList("Didin");
addTodoList("anwer");

showTodoList();

viewRemoveTodoList();

showTodoList();
