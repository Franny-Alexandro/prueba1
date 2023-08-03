<?php

class DbGestion{

    public function getconexionBD ($user, $password, $dataBase){
        $server = 'localhost';
        $dns = "mysql:host=$server;dbname=$dataBase";
        $dbConex = new PDO($dns, $user, $password);
        return $dbConex;

    }
}

?>