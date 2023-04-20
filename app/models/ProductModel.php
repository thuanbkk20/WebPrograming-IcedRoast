<?php
/*
    Ke thua tu class Model
*/
class ProductModel extends Model{
    private $_table = 'product';

    function __construct(){
        parent::__construct();
    }

    function tableFill(){
        return $this->_table;
    }

    function fieldFill()
    {
        return "*";
    }

    function primaryKey()
    {
        return "id";
    }

    public function getAllProduct(){
        $data = $this->db->table($this->_table)->getAll();
        return $data;
    }

    public function getCoffee(){
        $query = $this->db->query("SELECT * FROM product WHERE category ='Vietnam_Coffee' OR category ='Machine_Coffee' OR category ='Cold_Brew'");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getTea(){
        $query = $this->db->query("SELECT * FROM product WHERE category ='Fruit_Tea' OR category ='Macchiato'");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getHitea(){
        $query = $this->db->query("SELECT * FROM product WHERE category ='Hi-Tea_Tea' OR category ='Hi-Tea_Ice'");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getCake(){
        $query = $this->db->query("SELECT * FROM product WHERE category ='Pastries' OR category ='Cakes' OR category ='Snack'");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getAtHome(){
        $query = $this->db->query("SELECT * FROM product WHERE category ='Coffee-at-home' OR category ='Tea-at-home' OR category ='Snack'");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getChocolate(){
        $query = $this->db->query("SELECT * FROM product WHERE category ='Chocolate'");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getByCategory($cate){
        $query = $this->db->query("SELECT * FROM product WHERE category ='$cate'");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getProductById($id){
        $query = $this->db->query("SELECT * FROM product WHERE id =$id");
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getProductName($id){
        $query = $this->db->query("SELECT name FROM product WHERE id =$id");
        $data = $query->fetch(PDO::FETCH_ASSOC)['name'];
        return $data;
    }

    public function getProductImage($id){
        $query = $this->db->query("SELECT image FROM product WHERE id =$id");
        $data = $query->fetch(PDO::FETCH_ASSOC)['image'];
        return $data;
    }
}