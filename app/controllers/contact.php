<?php
class contact extends Controller{
    public $data = [], $model = [];

    public function __construct(){
        //construct
    }

    public function index(){
        $this->data['sub_content']['page_title']= "Liên hệ";
        $this->data["content"] = 'contact';
    
        //Render view
        $this->render('layouts/client_layout', $this->data);
    }
}