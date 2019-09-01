<?php

$task = $_POST['task'];



array_push($todos, array('task' => $task, 'done' => false));


$id = count($todos) - 1;

echo $id;
?>
