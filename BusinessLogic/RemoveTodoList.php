<?php

/**
 *  Delete Todo List
 * 
 */
function removeTodoList(int $number): bool
{
    global $todoList;

    // checked entry todo to list
    // sizeof = untuk mengetahui isi jumlah / panjang array
    if ($number > sizeof($todoList)) {
        return false;
    }

    // to move up one level on the deleted list
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
        // i+=i (i = i+i)
    }

    // unset() = untuk menghapus / menghacurkan variable secara permanen
    unset($todoList[sizeof($todoList)]);

    return true;
}

// list
// 1. ucup
// 2. cuplis
// 3. udin