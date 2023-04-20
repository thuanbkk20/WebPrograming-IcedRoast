<?php
class Cart extends Controller{
    public $data = [], $model = [];

    public function __construct(){
        $this->model['CartModel'] = $this->model("CartModel");
        $this->model['userModel'] = $this->model("UserModel");

        $data['cart'] = $this->model['CartModel']->getUserCart($this->data['user']['id']);
        if(!$data['cart']){
            Session::data('cartQuantity',0);
        }else{
            $quantity = $this->model['CartModel']->getCartQuantity($this->data['user']['id']);
            Session::data('cartQuantity',$quantity);
        }
        $data['user'] = [];
        //Lấy user để hiện thông tin trên header
        if(Session::data('user_id')!=null){
            $this->db = new Database();
            $query = $this->db->query("SELECT * FROM user WHERE id = '".Session::data('user_id')."';");
            $this->data['user'] = $query->fetch(PDO::FETCH_ASSOC);
        } 
    }

    public function index(){
        $cart = $this->model['CartModel']->getUserCart($this->data['user']['id']);
        var_dump($cart);
        $this->data["sub_content"] = [];
        $this->data["content"] = 'cart';
        $this->render('layouts/client_layout', $this->data);
    }
}