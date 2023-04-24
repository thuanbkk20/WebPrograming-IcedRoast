<?php

class ContactModify extends Controller{
    
    public $data=[], $model;
    public function __construct()
    {
        $this->model['CartModel'] = $this->model('CartModel');
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
        $this->data['sub_content']['contactArr'] = $this->model['ContactModel']->getAll();
        $this->data['content'] = 'admin/contact';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function delete(){
        $request = new Request();
        if($request->isGet()){
            $id = $_GET['id'];
            $this->model['ContactModel']->deleteContact($id);
            $message = 'Bạn đã xóa liên hệ của người dùng thành công';
            $url = "/admin/ContactModify";
            
            // Generate the JavaScript code for the popup alert and redirect
            echo '<script>';
            echo 'if (confirm("' . $message . '")) {';
            echo '    window.location.href = "' . $url . '";';
            echo '} else {';
            echo '    window.location.href = "' . $url . '";';
            echo '}';
            echo '</script>';
        }
        $this->data['sub_content']['contactArr'] = $this->model['ContactModel']->getAll();
        $this->data['content'] = 'admin/contact';
        $this->render('layouts/admin_layout', $this->data);
    }
}