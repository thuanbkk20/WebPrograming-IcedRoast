<?php

class Home extends Controller{
    
    public $model_home, $data=[];
    public function __construct()
    {
        $this->model_home = $this->model("HomeModel"); 
        $this->data['user'] = [];
        $this->data['user']['first_name'] = '';
        //Lấy user để hiện thông tin trên header
        if(Session::data('user_id')!=null){
            $this->db = new Database();
            $query = $this->db->query("SELECT * FROM user WHERE id = '".Session::data('user_id')."';");
            $this->data['user'] = $query->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function index(){
        // Session::data('username','Minh Thuan');
        // Session::data('email','thuan@gmail.com');
        // Session::Flash('msg','Welcome');
        // echo Session::Flash('msg');
        // echo '<pre>';print_r(Session::data());echo '</pre>';
        $this->data['sub_content'] = [];
        $this->data['page_title'] = "IcedRoast - Trang Chủ";
        $this->data["content"] = 'home';
        $this->render('layouts/client_layout', $this->data);
    }
}