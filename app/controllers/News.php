<?php
class News extends Controller{
    public $data = [], $model = [];

    public function __construct(){
        $this->model['NewsModel'] = $this->model('NewsModel');
        //construct
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
        //Trang này để hiển thị các tin tức tổng thể, tại view, biến $newsArr lưu trữ toàn bộ tin tức trong cơ sở dữ liệu
        $this->data['sub_content']['newsArr'] = $this->model['NewsModel']->getAllNews();

        // $this->data['sub_content']['page_title'] = "Tin tức";
        $this->data["content"] = 'news/news';
        $this->render('layouts/client_layout', $this->data);
    }

    public function coffeeholic(){
        //Trang này để hiển thị các tin tức tổng thể, tại view, biến $newsArr lưu trữ toàn bộ tin tức trong cơ sở dữ liệu
        $this->data['sub_content']['newsArr'] = $this->model['NewsModel']->getCoffeeholic();

        // $this->data['sub_content']['page_title'] = "Tin tức";
        $this->data["content"] = 'news/coffeeholic';
        $this->render('layouts/client_layout', $this->data);
    }

    public function teaholic(){
        //Trang này để hiển thị các tin tức tổng thể, tại view, biến $newsArr lưu trữ toàn bộ tin tức trong cơ sở dữ liệu
        $this->data['sub_content']['newsArr'] = $this->model['NewsModel']->getTeaholic();

        // $this->data['sub_content']['page_title'] = "Tin tức";
        $this->data["content"] = 'news/teaholic';
        $this->render('layouts/client_layout', $this->data);
    }

    public function blog(){
        //Trang này để hiển thị các tin tức tổng thể, tại view, biến $newsArr lưu trữ toàn bộ tin tức trong cơ sở dữ liệu
        $this->data['sub_content']['newsArr'] = $this->model['NewsModel']->getBlog();

        // $this->data['sub_content']['page_title'] = "Tin tức";
        $this->data["content"] = 'news/blog';
        $this->render('layouts/client_layout', $this->data);
    }
}