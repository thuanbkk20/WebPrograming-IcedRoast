<?php
class m0002_importData{
    public function up(){
        $dbObject = new DB();
        $db = $dbObject->db;
        //Insert data into user table
        $sql = 'USE icedroast;
        INSERT INTO user
        VALUES (1,"admin@gmail.com","$2y$10$kR3IBZ4Aunux/zENSwsLremmklA5x.iJT4nXlRPlYCeGjeleRfJ4i","Nguyen","Thuan","0123456789","admin","");';
        $db->query($sql);
    }
}