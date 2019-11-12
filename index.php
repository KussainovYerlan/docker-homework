<?php
    echo '<h1>Hello there</h1>';

    require('connection.php');

    $sth = $dbh->prepare('SELECT c.value FROM content as c LIMIT 1;');
    $sth->execute();

    $result = $sth->fetchColumn();

    $decryptedString=openssl_decrypt($result,'AES-128-ECB', 'docker-lesson');
    echo '<img src="' . $decryptedString . '" alt="picture">';
