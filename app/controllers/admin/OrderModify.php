<?php

class OrderModify extends Controller{
    
    public $data=[], $model;
    public function __construct()
    {
        $this->model['CartModel'] = $this->model('CartModel');
        $this->model['OrderModel'] = $this->model('OrderModel');
        $this->model['ContactModel'] = $this->model('ContactModel');
        $this->data['user'] = [];
        $this->data['user']['first_name'] = '';
        //Lấy user để hiện thông tin trên header
        if(Session::data('user_id')!=null){
            $this->db = new Database();
            $query = $this->db->query("SELECT * FROM user WHERE id = '".Session::data('user_id')."';");
            $this->data['user'] = $query->fetch(PDO::FETCH_ASSOC);
            ////Cập nhật thông tin giỏ hàng trên header
            $quantity = $this->model['CartModel']->getCartQuantity(Session::data('user_id'));
            Session::data('cartQuantity',$quantity);
        }else{
            ////Cập nhật thông tin giỏ hàng trên header
            Session::data('cartQuantity',0);
        }
    }

    public function index(){
        $this->data['sub_content']['orderArr'] = $this->model['OrderModel']->getAllOrder();
        $this->data['content'] = 'admin/order';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function paymentStatus(){
        $request = new Request();
        if($request->isPost()){
            $id = $_POST['id'];
            $paymentStatus = $_POST['paymentStatus'];
            $this->db->query("UPDATE orders SET payment_status = $paymentStatus WHERE id = $id");
        }
    }

    public function status(){
        $request = new Request();
        if($request->isPost()){
            $id = $_POST['id'];
            $status = $_POST['status'];
            $this->db->query("UPDATE orders SET status = $status WHERE id = $id");
        }
    }
}