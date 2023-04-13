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
            last_name varchar(50) not null,
            first_name varchar(19) not null,
            phone_number varchar(10) not null,
            role varchar(10) default '',
	        image varchar(50) default ''
        );
        
        DROP TABLE IF EXISTS product;
        CREATE TABLE product(
            id INT AUTO_INCREMENT,
            name varchar(50) not null,
            image varchar(50) not null,
            price varchar(10) not null,
            description varchar(500) not null,
            status varchar(2) not null,
            category varchar(100) not null,
            size varchar(1) not null,
            primary key (id)
        );
        
        DROP TABLE IF EXISTS orders;
        CREATE TABLE orders(
            id INT AUTO_INCREMENT,
	        user_id INT NOT NULL UNIQUE,
            order_date DATE not null,
            product_number INT default 1,
            product_detail varchar(500),
            total_price INT default 1,
            payment_status varchar(50) not null,
            address varchar(100) not null,
            description varchar(500),
            primary key (id)
        );

        DROP TABLE IF EXISTS cart;
        CREATE TABLE cart(
            id INT AUTO_INCREMENT,
	        user_id INT UNIQUE not null,
            product_detail varchar(500),
            primary key (id)
        );

        DROP TABLE IF EXISTS payment;
        CREATE TABLE payment(
            id INT AUTO_INCREMENT,
	        method varchar(50) not null,
	        price int not null,
            order_id INT not null,
            primary key (id)
        );

        DROP TABLE IF EXISTS news;
        CREATE TABLE news(
            id INT AUTO_INCREMENT,
	        title varchar(200) not null,
	        image varchar(200) not null,
            description varchar(1000) not null,
            link varchar(200) not null,
            tag varchar(50) not null,
            primary key (id)
        );

        DROP TABLE IF EXISTS category;
        CREATE TABLE category(
            id INT AUTO_INCREMENT,
	        name varchar(50) not null,
            primary key (id)
        );";

        $db->query($sql);
    }
}