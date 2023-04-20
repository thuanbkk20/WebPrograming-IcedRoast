<?php
class contact extends Controller{
    public $data = [], $model = [];

    public function __construct(){
        //construct
        $this->data['user']= [];
        $this->data['user']['first_name'] = '';
        //Lấy user để hiện thông tin trên header
        if(Session::data('user_id')!=null){
            $this->db = new Database();
            $query = $this->db->query("SELECT * FROM user WHERE id = '".Session::data('user_id')."';");
            $this->data['user'] = $query->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function index(){
        $this->data['sub_content'] = [];
        $this->data['page_title']= "Liên hệ";
        $this->data["content"] = 'contact';
    
        //Render view
        $this->render('layouts/client_layout', $this->data);
    }
}