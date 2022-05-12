<?php
    
    var_dump($_POST);
    var_dump($_POST);
    print_r($_POST);
    //Datebase Connection :

    $dsn='mysql:host=localhost;dbname=anastest'; //data sourse name
    $user = 'root';
    $pass= '';

    try{
    $connect = new PDO($dsn,$user,$pass);
        echo 'you are connected';

}catch(PDOException $e){
    
    echo 'Failed ' . $e->getMessage();
}

?>