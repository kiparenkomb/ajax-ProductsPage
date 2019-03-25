<?php
    require __DIR__ . "/model.php";

    print json_encode(getItems($_POST['offset'], $_POST['limit']));