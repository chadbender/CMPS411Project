<?php
// create unique token for url
$token = sha1(uniqid($userID, true));

// store token in db
$query = $db->prepare(
    "INSERT INTO pending_users (username, token, tstamp) VALUES (?, ?, ?)");
$query->execute(
    array(
        $username,
        $token,
        $_SERVER["REQUEST_TIME"]))

// generate url
$url = "http://example.com/activate_link.php?token=$token";

// send link via email
...
?>