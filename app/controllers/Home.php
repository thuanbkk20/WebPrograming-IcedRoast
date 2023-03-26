<?php

class Home extends Controller{
    
    public $model_home, $data=[];
    public function __construct()
    {
        $this->model_home = $this->model("HomeModel"); 
    }

    public function index(){
        // Session::data('username','Minh Thuan');
        // Session::data('email','thuan@gmail.com');
        // Session::Flash('msg','Welcome');
        // echo Session::Flash('msg');
        // echo '<pre>';print_r(Session::data());echo '</pre>';
        $this->data['sub_content']['page_title'] = "Trang chu";
        $this->data["content"] = 'home';
        $this->render('layouts/client_layout', $this->data);
    }
}