<?php 
class m0001_initial{
    public function up(){
        $dbObject = new DB();
        $db = $dbObject->db;
        $sql = "CREATE DATABASE IF NOT EXISTS icedroast;
        Use icedroast;
        
        DROP TABLE IF EXISTS users;
        CREATE TABLE users(
            id varchar(10) not null,
            username varchar(50) not null,
            password varchar(50) not null,
            name varchar(50) not null,
            phone_number varchar(50) not null,
            role varchar(50) not null,
            primary key (id)
        );";

        $db->query($sql);
    }
}