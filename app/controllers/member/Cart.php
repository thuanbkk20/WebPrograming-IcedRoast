<?php
class Cart extends Controller{
    public $data = [], $model = [];

    public function __construct(){
        $this->model['CartModel'] = $this->model("CartModel");
        $this->model['userModel'] = $this->model("UserModel");
        $this->data['user'] = [];
        //Lấy user để hiện thông tin trên header
        if(Session::data('user_id')!=null){
            $this->db = new Database();
            $query = $this->db->query("SELECT * FROM user WHERE id = '".Session::data('user_id')."';");
            $this->data['user'] = $query->fetch(PDO::FETCH_ASSOC);
        } 
    }

    public function index(){
        $quantity = $this->model['CartModel']->getCartQuantity(Session::data('user_id'));
        if($quantity){
            Session::data('cartQuantity',$quantity);
        }else{
            Session::delete('cartQuantity');
        }
        $cart = $this->model['CartModel']->getUserCart($this->data['user']['id']);
        $this->data["sub_content"]['cart'] = $cart;
        $this->data["content"] = 'cart';
        $this->render('layouts/client_layout', $this->data);
    }

    public function delete(){
        $request = new Request();
        // Delete product in cart
        if($request->isGet()){
            $id = $_GET['id'];
            $this->model['CartModel']->deleteProductInCart($id);
        }
        $reponse = new Response();
        $reponse->reDirect('member/cart');
    }

    public function updateQuantity(){
        $request = new Request();
        // Delete product in cart
        if($request->isGet()){
            $id = $_GET['id'];
            if($_GET['sign']=='-'){
                $quantity = $this->model['CartModel']->getQuantity($id);
                if($quantity<=1){
                    $this->model['CartModel']->deleteProductInCart($id);
                }else{
                    $this->model['CartModel']->updateQuantity($id,'desrease');
                }
            }else{
                $this->model['CartModel']->updateQuantity($id,'increase');
            }
        }
        $reponse = new Response();
        $reponse->reDirect('member/cart');
    }

}