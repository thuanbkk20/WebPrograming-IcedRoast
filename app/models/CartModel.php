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
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getCartQuantity($user_id){
        $query = $this->db->query("SELECT sum(quantity) FROM cart WHERE user_id = $user_id");
        $data = $query->fetch(PDO::FETCH_ASSOC)['sum(quantity)'];
        return $data;
    }

    public function getProductInCart($user_id, $product_id, $size){
        $query = $this->db->query("SELECT * FROM cart WHERE user_id = $user_id AND product_id = $product_id AND size = '$size'");
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getProductQuantity($user_id, $product_id, $size){
        $query = $this->db->query("SELECT * FROM cart WHERE user_id = $user_id AND product_id = $product_id AND size = '$size'");
        $data = $query->fetch(PDO::FETCH_ASSOC)['quantity'];
        return $data;
    }

    public function addToCart($data){
        $this->db->table($this->_table)->insert($data);
    }

    public function updateProduct($user_id, $product_id, $size, $data){
        $this->db->table($this->_table)->where('user_id','=',$user_id)->where('product_id','=',$product_id)->where('size','=',$size)->update($data);
    }

    public function deleteProductInCart($id){
        $this->db->query("DELETE FROM cart WHERE id = $id");
    }

    public function updateQuantity($id,$type){
        if($type == 'increase'){
            $this->db->query("UPDATE cart SET quantity = quantity + 1 WHERE id = $id");
        }else if($type == 'desrease'){
            $this->db->query("UPDATE cart SET quantity = quantity - 1 WHERE id = $id");
        }
    }
}