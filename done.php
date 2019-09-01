<?php

$id = $_POST['id'];



foreach ($todos as $key => &$todo) {

    if ($key == $id)
        if ($todo['done'] == false)
            $todo['done'] = true;
        else
            $todo['done'] = false;
}

?>