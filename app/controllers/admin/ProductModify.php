<?php

class ProductModify extends Controller{
    
    public $data=[], $model;
    public function __construct()
    {
        $this->model['CartModel'] = $this->model('CartModel');
        $this->model['ProductModel'] = $this->model('ProductModel');
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
        //Phân trang
        if(!isset($_GET['page'])){
            $page = 1;
        }else{
            $page = $_GET['page'];
        }
        $results_per_page = 10;
        $page_first_result = ($page-1) * $results_per_page;
        $query = $this->db->query("SELECT * FROM product");
        $number_of_result = $query->rowCount();
        //determine the total number of pages available
        $number_of_page = ceil ($number_of_result / $results_per_page);
        //Lấy dữ liệu gửi đến view
        $query = "SELECT *FROM product LIMIT " . $page_first_result . "," . $results_per_page;
        $query = $this->db->query($query);
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        // $data = $this->model['ProductModel']->getAllProduct();
        if(isset($_GET['page'])){
            $this->data['sub_content']['curPage'] = $_GET['page'];
        }
        $this->data['sub_content']['user'] = $this->data['user'];
        $this->data['sub_content']['productArr'] = $data;
        $this->data['sub_content']['number_of_page'] = $number_of_page;
        $this->data["content"] = 'admin/product/list';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function create(){
        $request = new Request();
        if($request->isPost()){
            //set rules
            $request->rules([
                'name' => 'required|max:100',
                'image' => 'required|max:200',
                'price' => 'required|callback_checkPrice',
                'description' => 'required|min:20|max:500',
                'status' => 'required',
                'category' => 'required|max:50',
            ]);

            //set message
            $request->message([
                'name.required' => 'Tên sản phẩm không được để trống',
                'name.max' => 'Tên sản phẩm tối đa 100 ký tự',
                'image.required' => 'Link sản phẩm không được để trống',
                'image.max' => 'Link sản phẩm tối đa 200 ký tự',
                'price.required' => 'Giá sản phẩm không được để trống',
                'price.callback_checkPrice' => 'Giá sản phẩm phải là một số lớn hơn 0',
                'description.required' => 'Mô tả sản phẩm không được để trống',
                'description.min' => 'Mô tả sản phẩm không được ngắn hơn 20 ký tự',
                'description.max' => 'Mô tả sản phẩm không được dài hơn 500 ký tự',
                'status.required' => 'Tình trạng không được để trống',
                'category.required' => 'Phân loại không được để trống',
                'category.max' => 'Độ dài tối đa của trường phân loại là 50 ký tự'
            ]);

            //validate
            $validate = $request->validate();
            if(!$validate){
                Session::Flash('errors',$request->errors());
                Session::Flash('msg','Đã có lỗi xảy ra! Vui lòng kiểm tra lại');
                Session::Flash('old',$request->getFields());
            }else{
                //Lấy dữ liệu từ form
                $new_product = [];
                $new_product['name'] = trim($_POST['name']);
                $new_product['image'] = trim($_POST['image']);
                $new_product['price'] = trim($_POST['price']);
                $new_product['description'] = trim($_POST['description']);
                $new_product['status'] = trim($_POST['status']);
                $new_product['category'] = trim($_POST['category']);
                $new_product['size'] = trim($_POST['size']);
                //Tạo product
                $this->model['ProductModel']->addProduct($new_product);

                $message = "Bạn đã thêm sản phẩm mới thành công, chuyển đến trang quản lí?";
                $url = "/admin/ProductModify";

                // Generate the JavaScript code for the popup alert and redirect
                echo '<script>';
                echo 'if (confirm("' . $message . '")) {';
                echo '    window.location.href = "' . $url . '";';
                echo '} else {';
                echo '    window.location.href = "' . $url . '";';
                echo '}';
                echo '</script>';
            }
        }
        $this->data['sub_content']['errors'] = Session::Flash('errors');
        $this->data['sub_content']['msg'] = Session::Flash('msg');
        $this->data['sub_content']['old'] = Session::Flash('old');
        //Thông tin user
        $this->data['sub_content']['user'] = $this->data['user'];
        $this->data["content"] = 'admin/product/add';
        $this->render('layouts/admin_layout', $this->data);
    }


    public function update(){
        $request = new Request();
        if($request->isPost()){
            //set rules
            $this->data['sub_content']['productToUpdate'] = $this->model['ProductModel']->getProductById($_POST['id']);
            $request->rules([
                'name' => 'required|max:100',
                'image' => 'required|max:200',
                'price' => 'required|callback_checkPrice',
                'description' => 'required|min:20|max:500',
                'status' => 'required',
                'category' => 'required|max:50',
            ]);

            //set message
            $request->message([
                'name.required' => 'Tên sản phẩm không được để trống',
                'name.max' => 'Tên sản phẩm tối đa 100 ký tự',
                'image.required' => 'Link sản phẩm không được để trống',
                'image.max' => 'Link sản phẩm tối đa 200 ký tự',
                'price.required' => 'Giá sản phẩm không được để trống',
                'price.callback_checkPrice' => 'Giá sản phẩm phải là một số lớn hơn 0',
                'description.required' => 'Mô tả sản phẩm không được để trống',
                'description.min' => 'Mô tả sản phẩm không được ngắn hơn 20 ký tự',
                'description.max' => 'Mô tả sản phẩm không được dài hơn 500 ký tự',
                'status.required' => 'Tình trạng không được để trống',
                'category.required' => 'Phân loại không được để trống',
                'category.max' => 'Độ dài tối đa của trường phân loại là 50 ký tự'
            ]);

            //validate
            $validate = $request->validate();
            if(!$validate){
                Session::Flash('errors',$request->errors());
                Session::Flash('msg','Đã có lỗi xảy ra! Vui lòng kiểm tra lại');
                Session::Flash('old',$request->getFields());
            }else{
                //Lấy dữ liệu từ form
                $new_product = [];
                $new_product['name'] = trim($_POST['name']);
                $new_product['image'] = trim($_POST['image']);
                $new_product['price'] = trim($_POST['price']);
                $new_product['description'] = trim($_POST['description']);
                $new_product['status'] = trim($_POST['status']);
                $new_product['category'] = trim($_POST['category']);
                $new_product['size'] = trim($_POST['size']);
                //Tạo product mới
                $this->model['ProductModel']->updateProduct($_POST['id'],$new_product);

                $message = "Bạn đã cập nhật thông tin cho sản phẩm thành công, chuyển đến trang quản lí?";
                $url = "/admin/ProductModify";

                // Generate the JavaScript code for the popup alert and redirect
                echo '<script>';
                echo 'if (confirm("' . $message . '")) {';
                echo '    window.location.href = "' . $url . '";';
                echo '} else {';
                echo '    window.location.href = "' . $url . '";';
                echo '}';
                echo '</script>';
            }
        }
        $this->data['sub_content']['errors'] = Session::Flash('errors');
        $this->data['sub_content']['msg'] = Session::Flash('msg');
        $this->data['sub_content']['old'] = Session::Flash('old');

        //Thông tin user
        $this->data['sub_content']['user'] = $this->data['user'];
        if(isset($_GET['id'])) $this->data['sub_content']['productToUpdate'] = $this->model['ProductModel']->getProductById($_GET['id']);
        $this->data["content"] = 'admin/product/update';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function delete(){
        // Xóa sản phẩm có id = $_GET['id']
        $this->model['ProductModel']->deleteProduct($_GET['id']);
        $message = "Bạn đã xóa sản phẩm thành công, chuyển đến trang quản lí?";
        $url = "/admin/ProductModify";
        
        // Generate the JavaScript code for the popup alert and redirect
        echo '<script>';
        echo 'if (confirm("' . $message . '")) {';
        echo '    window.location.href = "' . $url . '";';
        echo '} else {';
        echo '    window.location.href = "' . $url . '";';
        echo '}';
        echo '</script>';
    }

    public function checkPrice($price){
        if((int)$price<0) return false;
        return true;
    }

}