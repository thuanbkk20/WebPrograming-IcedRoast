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
        $query = $this->db->query("SELECT * FROM product WHERE category ='Cà Phê Việt Nam' OR category ='Cà Phê Máy' OR category ='Cold Brew'");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getTea(){
        $query = $this->db->query("SELECT * FROM product WHERE category ='Trà Trái Cây' OR category ='Trà sữa Macchiato'");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getHitea(){
        $query = $this->db->query("SELECT * FROM product WHERE category ='Hi-Tea Trà' OR category ='Hi-Tea Đá Tuyết'");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getCake(){
        $query = $this->db->query("SELECT * FROM product WHERE category ='Bánh mặn' OR category ='Bánh ngọt' OR category ='Snack'");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getAtHome(){
        $query = $this->db->query("SELECT * FROM product WHERE category ='Cà phê tại nhà' OR category ='Trà tại nhà' OR category ='Snack'");
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
}