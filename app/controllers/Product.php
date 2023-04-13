<?php
class Product extends Controller{

    public $data = [];

    public function __construct(){
        $data['user'] = [];
        //Lấy user để hiện thông tin trên header
        if(Session::data('user_id')!=null){
            $this->db = new Database();
            $query = $this->db->query("SELECT * FROM user WHERE id = '".Session::data('user_id')."';");
            $this->data['user'] = $query->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function index(){
        $product = $this->model("ProductModel");

        $this->data['sub_content']['page_title'] = "Danh sach san pham";
        $this->data['sub_content']['product_list'] = $product->getProductList();
        $this->data["content"] = 'products/list';
        //Render view
        $this->render('layouts/client_layout', $this->data);
    }

    public function detail($id=0){
        $product = $this->model("ProductModel");
        $this->data['sub_content']['info'] = $product->getDetail($id);
        $this->data['sub_content']['page_title']= "Chi tiết sản phẩm";
        $this->data["content"] = 'products/detail';
        
        //Render view
        $this->render('layouts/client_layout', $this->data);
    }
}