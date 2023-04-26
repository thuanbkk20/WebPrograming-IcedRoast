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
            name varchar(100) not null,
            image varchar(200) not null,
            price INT not null,
            description varchar(500) not null,
            status varchar(20) not null,
            category varchar(50) not null,
            size varchar(1) not null default 'S',
            primary key (id)
        );
        
        DROP TABLE IF EXISTS orders;
        CREATE TABLE orders(
            id INT AUTO_INCREMENT,
	        user_id INT NOT NULL,
            product_id INT NOT NULL,
            order_date TIMESTAMP not null DEFAULT CURRENT_TIMESTAMP,
            quantity INT NOT NULL default 1,
            price INT NOT NULL,
            image varchar(200) NOT NULL,
            name varchar(100) NOT NULL, 
            size varchar(1) NOT NULL default 'S',
            payment_status varchar(30) NOT NULL default 'Chưa thanh toán',
            status varchar(30) NOT NULL default 'Chưa xác nhận',
            address varchar(200) NOT NULL,
            description varchar(300),
            primary key (id, user_id, product_id,price)
        );

        DROP TABLE IF EXISTS cart;
        CREATE TABLE cart(
            id INT AUTO_INCREMENT,
	        user_id INT not null,
            product_id INT not null,
            image varchar(200) not null,
            name varchar(100) not null,
            price INT not null,
            size varchar(2) not null,
            quantity INT not null default 1,
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
        
        DROP TABLE IF EXISTS contact;
        CREATE TABLE contact(
            id INT AUTO_INCREMENT,
            name varchar(50) not null,
            phone_number varchar(10) not null,
            email varchar(50) not null,
            detail varchar(200) not null,
            time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            primary key (id)
        );";

        $db->query($sql);
    }
}