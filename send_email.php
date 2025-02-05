<?php use function MongoDB\BSON\toJSON;

require ("script.php");
    $answer = true;
    if (
        empty($_POST['email'])
        || empty($_POST['name'])
        || empty($_POST['textarea'])
        || empty($_POST['phone_number'])
    ) {
        $answer = false;
    } else {
        $answer = sendMailTransactional($_POST['email'], $_POST['name'],
            $_POST['textarea'], $_POST['phone_number']
        );
    }
    echo "{\"answer\": \"$answer\"}";