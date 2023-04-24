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
        //Phân trang
        if(!isset($_GET['page'])){
            $page = 1;
        }else{
            $page = $_GET['page'];
        }
        $results_per_page = 10;
        $page_first_result = ($page-1) * $results_per_page;
        $data = $this->model['OrderModel']->getOrder2();
        $number_of_result = count($data);
        //determine the total number of pages available
        $number_of_page = ceil($number_of_result / $results_per_page);
        //Lấy dữ liệu gửi đến view
        //Biến này có các record là mảng các sản phẩm trong đơn hàng
        $orderArr = array_slice($data,$page_first_result,$results_per_page);
        $data = [];
        foreach($orderArr as $key=>$order){
            $id = $order[0]['id'];
            $user_id = $order[0]['user_id'];
            $time = $order[0]['order_date'];
            $address = $order[0]['address']; 
            $status = $order[0]['status']; 
            $payment_status = $order[0]['payment_status'];
            $description = $order[0]['description'];
            $quantity = 0;
            $price = 0;
            for($i=0; $i<count($order); $i++){
                $quantity += (int)$order[$i]['quantity'];
                $price += (int)$order[$i]['quantity']*(int)$order[$i]['price'];
            }
            $data[$key]['id'] = $id;
            $data[$key]['user_id'] = $user_id;
            $data[$key]['time'] = $time;
            $data[$key]['address'] = $address;
            $data[$key]['status'] = $status;
            $data[$key]['payment_status'] = $payment_status;
            $data[$key]['quantity'] = $quantity;
            $data[$key]['price'] = $price;
            $data[$key]['description'] = $description;
        }

        if(isset($_GET['page'])){
            $this->data['sub_content']['curPage'] = $_GET['page'];
        }
        $this->data['sub_content']['user'] = $this->data['user'];
        $this->data['sub_content']['orderArr'] = $data;
        $this->data['sub_content']['number_of_page'] = $number_of_page;
        $this->data['content'] = 'admin/order';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function paymentStatus(){
        $request = new Request();
        if($request->isGet()){
            $id = $_GET['id'];
            $paymentStatus = $_GET['paymentStatus'];
            $this->db->query("UPDATE orders SET payment_status = '$paymentStatus' WHERE id = $id");
            echo 'paymentStatus';
        }
        
    }

    public function status(){
        $request = new Request();
        if($request->isGet()){
            $id = $_GET['id'];
            $status = $_GET['status'];
            $this->db->query("UPDATE orders SET status = '$status' WHERE id = $id");
            echo 'Status';
        }
        
    }
}