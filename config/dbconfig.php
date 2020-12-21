<?php 
    $dataname="dbmnm";
    $user = "root";
    $pass = "";
    try{
        $connet = new PDO("mysql:host=localhost;dbname=$dataname", $user, $pass);

    }catch(PDOException $e){
        print "Error: ". $e->getMessage();
    }
    

?>