<?php
    class database_connection {

       protected $username = "root";
       protected $password = "";
       protected $db_name = "Espiel-JO";
       protected $dbh = null;

       function open_connection(){
            $this->dbh = new PDO("mysql:host=localhost;dbname=".$this->db_name, $this->username, $this->password);
       }
       function close_connection(){
            $this->dbh = null;
       }
    }
?>
