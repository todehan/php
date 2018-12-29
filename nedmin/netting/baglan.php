<?php

try{
    $db=new PDO("mysql:host=localhost;dbname=veritabani;charset=utf8", 'root', '3507tode');
    
}
catch (PDOExpception $e) {

    echo $e->getMessage();
}

?>