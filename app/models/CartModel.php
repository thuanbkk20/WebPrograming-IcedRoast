<?php
/*
    Ke thua tu class Model
*/
class CartModel extends Model{
    private $_table = 'cart';

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

    public function getUserCart($user_id){
        $query = $this->db->query("SELECT * FROM cart WHERE user_id =$user_id");
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getCartQuantity($user_id){
        $query = $this->db->query("SELECT sum(quantity) FROM cart WHERE user_id = $user_id");
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}