<?php

require_once "View/ViewAddTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

addTodoList("Ucup");
addTodoList("Udin");
addTodoList("Dendi");

viewAddTodoList();

showTodoList();
