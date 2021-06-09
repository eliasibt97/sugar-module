<?php

function post_install() {
    
    require_once('data/MathBean.php');
    $math = new MathBean();
    $mode = $_POST['mode'];

    if(!$mode == 'install') throw "Not unistall file found";
    
    global $db;
    $db->query($math->install());

}

?>