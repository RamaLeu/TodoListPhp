<?php
use TaskManager\Request;
use TaskManager\Task;
use TaskManager\DB;

    $id = intval(basename(Request::uri()));
echo "Id:";
echo $id;

$connection = DB::connect();
$tasks = new Task($connection);

$tasks->setComplete($id);
?>
