<?php
class Order extends Controller{
    public $data = [], $model = [];

    public function __construct(){
        $this->model['CartModel'] = $this->model("CartModel");
        $this->model['userModel'] = $this->model("UserModel");
        $this->model['OrderModel'] = $this->model("OrderModel");
        $data['user'] = [];
        //Lấy user để hiện thông tin trên header
        if(Session::data('user_id')!=null){
            $this->db = new Database();
            $query = $this->db->query("SELECT * FROM user WHERE id = '".Session::data('user_id')."';");
            $this->data['user'] = $query->fetch(PDO::FETCH_ASSOC);
        } 
    }

    public function index(){
        $data = $this->model['OrderModel']->getUserOrder(Session::data('user_id'));
        $this->data["sub_content"]['orderArr'] = $data;
        $this->data["content"] = 'profile/order';
        $this->render('layouts/client_layout', $this->data);
    }

    public function addOrder(){
        $request = new Request();
        $reponse = new Response();
        // Delete product in cart
        if($request->isPost()){
            $max_id = $this->model['OrderModel']->getMaxId();
            if($max_id){
                $order['id'] = $max_id + 1;
            }else{
                $order['id'] = 1;
            }
            $order['user_id'] = Session::data('user_id');
            $order['order_date'] = date('Y-m-d H:i:s');
            $order['address'] = $_POST['address'];
            $order['description'] = $_POST['description'];
            //Lấy tất cả sản phẩm trong giỏ hàng của người dùng thêm vào order
            $productInCart = $this->model['CartModel']->getUserCart(Session::data('user_id'));
            foreach($productInCart as $product){
                $order['product_id'] = $product['product_id'];
                $order['quantity'] = $product['quantity'];
                $order['price'] = $product['price'];
                $order['image'] = $product['image'];
                $order['name'] = $product['name'];
                $order['size'] = $product['size'];
                $this->model['OrderModel']->addOrder($order);
            }
            $reponse->reDirect('member/order/orderDetail?order_id='.$order['id']);
        }else{
            $reponse->reDirect('loadError');
        }
    }

    public function orderDetail(){
        $request = new Request();
        $reponse = new Response();
        if($request->isGet()){
            $order_id = $_GET['order_id'];
            $data = $this->model['OrderModel']->getOrder($order_id);
            $this->data["sub_content"]['orderInfo'] = $data;
            $this->data["content"] = 'profile/orderDetail';
            $this->render('layouts/client_layout', $this->data);
        }else{
            $reponse->reDirect('loadError');
        }
    }
}