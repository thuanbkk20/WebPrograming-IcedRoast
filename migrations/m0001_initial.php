<?php 
class m0001_initial{
    public function up(){
        $dbObject = new DB();
        $db = $dbObject->db;
        $sql = "CREATE DATABASE IF NOT EXISTS icedroast;
        Use icedroast;
        
        DROP TABLE IF EXISTS user;
        CREATE TABLE user(
            id INT PRIMARY KEY AUTO_INCREMENT,
            username varchar(50) not null,
            password varchar(100) not null,
            name varchar(50) not null,
            phone_number varchar(10) not null,
            role varchar(10) default '',
	        image varchar(50) default ''
        );";
        
        $db->query($sql);
    }
}