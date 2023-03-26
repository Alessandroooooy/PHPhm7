<?php

session_start();
function handler() : void
{
    if (!empty($_COOKIE['use_info'])) {
        setcookie('use_info', ++$_COOKIE['use_info'], time() + 3600);
    } else {
        setcookie('use_info', 1, time() + 300) ;
    }

    if (empty($_POST)) {
        return;
    }
    if(isset($_POST['userinfo']) && isset($_POST['emailinfo']) && isset($_POST['select'])){
        $userinfo = $_POST['nameinfo'];
        $emailinfo = $_POST['emailinfo'];
        $select = $_POST['select'];
    
        $data = array($userinfo, $emailinfo, $select);
    
        $file = fopen('registrations.csv', 'a');
    
        fputcsv($file, $data);
    
        fclose($file);
    }

}

handler();

session_write_close();
header('Location: /info.php');

exit();
    ?>
