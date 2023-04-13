<?php
class News extends Controller{
    public $data = [], $model = [];

    public function __construct(){
        //construct
    }

    public function index(){
        //index
        $this->data['sub_content']['page_title'] = "Tin tức";
        $this->data["content"] = 'news';
        $this->render('layouts/client_layout', $this->data);
    }
}