<?php
    $name=$_POST['name'];
    $pw=$_POST['passw'];
    file_put_contents('../Reg-user/users/test.txt',PHP_EOL .'Пользователь: ' . $name , FILE_APPEND);
    file_put_contents('../Reg-user/users/test.txt',PHP_EOL .'пороль : ' .  $pw,FILE_APPEND);
    // fwrite('../Reg-user/users/test.txt','пороль : ' . $pw);

    //if ()
?>