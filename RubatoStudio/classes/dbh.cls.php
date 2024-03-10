<?php

class Dbh {

    protected function connect() {
        try {
            $dbname = 'ooplogin';
            $username = "root";
            $password = "";
            $dbh = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
            return $dbh;
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}