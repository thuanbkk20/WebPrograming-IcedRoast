<?php
class News extends Controller{
    public $data = [], $model = [];

    public function __construct(){
        //construct
        $data['user'] = [];
        //Lấy user để hiện thông tin trên header
        if(Session::data('user_id')!=null){
            $this->db = new Database();
            $query = $this->db->query("SELECT * FROM user WHERE id = '".Session::data('user_id')."';");
            $this->data['user'] = $query->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function index(){
        //index
        $this->data['sub_content']['page_title'] = "Tin tức";
        $this->data["content"] = 'news';
        $this->render('layouts/client_layout', $this->data);
    }
}