<?php require ("script.php"); ?>

<?php
    $response = sendMail(
        "iamlukovkin@gmail.com",
        "test",
        createMessageToUser(
            "Иван Владимирович Луковкин",
            "iamlukovkin@gmail.com",
            "test",
            "88005553535"
        )
    );
    echo $response;
?>

