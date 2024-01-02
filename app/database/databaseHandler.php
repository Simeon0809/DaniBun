<?php

class DatabaseHandler {
    
    protected function conn(){
        try{
            $username = "root";
            $password = "";
            $dbh = new PDO("mysql:host=localhost;dbname=danibun", $username, $password);
            
            return $dbh;
        } 
        
        catch (PDOException $e){
            print "ERROR!" . $e->getMessage() . "<br/>";
            die();
        }
    }
}