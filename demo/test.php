<?php

    echo md5("password");
    echo "<br>";
    echo sha1("password");
    echo "<br>";
    $hash = crypt("password", '$1$password$');

    $hash = password_hash("password", PASSWORD_BCRYPT);
    if (password_verify("password", $hash))
        echo "Пароль верный";




/* Part about buffer.

    //run our buffer
    ob_start();
    echo 'Hello world.';
    setcookie("name", "Oleksandr.");

    //sent our things in buffer
    ob_flush();

    echo 'More content!';
    echo 'And again, more content!!!';

    //sent to buffer and close it.
    ob_end_flush();

    //run buffer
    ob_start();

    echo "Hello ";
    $out1 = ob_get_contents();
    echo "World";

    $out2 = ob_get_contents();
    ob_clean();

    echo "Oleksandr";
    echo " and ";
    echo "someone";

    $out3 = ob_get_contents();

    //clean and close buffer
    ob_end_clean();

    echo "<br>";
    echo $out1;
    echo "<br>";
    echo $out2;
    echo "<br>";
    echo $out3;

*/