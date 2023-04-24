<?php
class UserModify extends Controller{
    public $data=[], $model;
    public function __construct()
    {
        $this->model['userModel'] = $this->model('UserModel');
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
        $query = $this->db->query("SELECT * FROM user");
        $number_of_result = $query->rowCount();
        //determine the total number of pages available
        $number_of_page = ceil ($number_of_result / $results_per_page);
        //Lấy dữ liệu gửi đến view
        $query = "SELECT *FROM user LIMIT " . $page_first_result . "," . $results_per_page;
        $query = $this->db->query($query);
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        // $data = $this->model['ProductModel']->getAllProduct();
        if(isset($_GET['page'])){
            $this->data['sub_content']['curPage'] = $_GET['page'];
        }
        $this->data['sub_content']['user'] = $this->data['user'];
        $this->data['sub_content']['userArr'] = $data;
        $this->data['sub_content']['number_of_page'] = $number_of_page;
        $this->data["content"] = 'users/list';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function create(){
        $request = new Request();
        if($request->isPost()){
            //set rules
            $request->rules([
                'last_name' => 'required|max:50',
                'first_name' => 'required|max:50',
                'phone_number' => 'required|length:10',
                'email' => 'required|email|min:7|unique:user:username',
                'password' => 'required|min:3',
                'confirm_password' => 'required|match:password'
            ]);

            //set message
            $request->message([
                'last_name.required' => 'Họ tên không được để trống',
                'last_name.max' => 'Họ tên phải bé hơn 50 ký tự',
                'first_name.required' => 'Họ tên không được để trống',
                'first_name.max' => 'Họ tên phải bé hơn 50 ký tự',
                'phone_number.required' => 'Số điện thoại không được để trống',
                'phone_number.length' => 'Độ dài của số điện thoại là 10',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Định dạng email không hợp lệ',
                'email.min' => 'Email phải lớn hơn 7 ký tự',
                'email.unique' => 'Email đã tồn tại trong hệ thống',
                'password.required' => 'Mật khẩu không được để trống',
                'password.min'  => 'Mật khẩu phải lớn hơn 3 ký tự',
                'confirm_password.required' => 'Xác nhận mật khẩu không được để trống',
                'confirm_password.match' => 'Mật khẩu nhập lại không khớp'
            ]);

            //validate
            $validate = $request->validate();
            if(!$validate){
                Session::Flash('errors',$request->errors());
                Session::Flash('msg','Đã có lỗi xảy ra! Vui lòng kiểm tra lại');
                Session::Flash('old',$request->getFields());
            }else{
                //Lấy dữ liệu từ form
                $new_user = [];
                $new_user['username'] = trim($_POST['email']);
                $new_user['first_name'] = trim($_POST['first_name']);
                $new_user['last_name'] = trim($_POST['last_name']);
                $new_user['phone_number'] = trim($_POST['phone_number']);
                $new_user['role'] = trim($_POST['role']);
                $new_user['password'] = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);
                //Tạo user mới
                $this->model['userModel']->addUser($new_user);

                $message = "Bạn đã thêm người dùng mới thành công, chuyển đến trang quản lí?";
                $url = "/admin/UserModify";

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
        $this->data["content"] = 'users/add';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function update(){
        $request = new Request();
        if($request->isPost()){
            //set rules
            $this->data['sub_content']['userToUpdate'] = $this->model['userModel']->getUser($_POST['id']);
            $request->rules([
                'last_name' => 'required|max:50',
                'first_name' => 'required|max:50',
                'phone_number' => 'required|length:10',
                'email' => 'required|email|min:7|callback_check_email',
                'password' => 'required|min:3',
                'confirm_password' => 'required|match:password'
            ]);

            //set message
            $request->message([
                'last_name.required' => 'Họ tên không được để trống',
                'last_name.max' => 'Họ tên phải bé hơn 50 ký tự',
                'first_name.required' => 'Họ tên không được để trống',
                'first_name.max' => 'Họ tên phải bé hơn 50 ký tự',
                'phone_number.required' => 'Số điện thoại không được để trống',
                'phone_number.length' => 'Độ dài của số điện thoại là 10',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Định dạng email không hợp lệ',
                'email.min' => 'Email phải lớn hơn 7 ký tự',
                'email.callback_check_email' => 'Email đã tồn tại trong hệ thống',
                'password.required' => 'Mật khẩu không được để trống',
                'password.min'  => 'Mật khẩu phải lớn hơn 3 ký tự',
                'confirm_password.required' => 'Xác nhận mật khẩu không được để trống',
                'confirm_password.match' => 'Mật khẩu nhập lại không khớp'
            ]);

            //validate
            $validate = $request->validate();
            if(!$validate){
                Session::Flash('errors',$request->errors());
                Session::Flash('msg','Đã có lỗi xảy ra! Vui lòng kiểm tra lại');
                Session::Flash('old',$request->getFields());
            }else{
                //Lấy dữ liệu từ form
                $new_user = [];
                $new_user['username'] = trim($_POST['email']);
                $new_user['first_name'] = trim($_POST['first_name']);
                $new_user['last_name'] = trim($_POST['last_name']);
                $new_user['phone_number'] = trim($_POST['phone_number']);
                $new_user['role'] = trim($_POST['role']);
                $new_user['password'] = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);
                //Tạo user mới
                $this->model['userModel']->updateUser($_POST['id'],$new_user);

                $message = "Bạn đã cập nhật thông tin cho người dùng thành công, chuyển đến trang quản lí?";
                $url = "/admin/UserModify";

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
        if(isset($_GET['id'])) $this->data['sub_content']['userToUpdate'] = $this->model['userModel']->getUser($_GET['id']);
        $this->data["content"] = 'users/update';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function delete(){
        // Xóa user có id = $_GET['id']
        $this->model['userModel']->deleteUser($_GET['id']);
        $username = $this->model['userModel']->getUserName($_GET['id']);

        $message = "Bạn đã xóa người dùng thành công, chuyển đến trang quản lí?";
        $url = "/admin/UserModify";

        // Generate the JavaScript code for the popup alert and redirect
        echo '<script>';
        echo 'if (confirm("' . $message . '")) {';
        echo '    window.location.href = "' . $url . '";';
        echo '} else {';
        echo '    window.location.href = "' . $url . '";';
        echo '}';
        echo '</script>';
    }

    public function check_email($email){
        if(!$this->model['userModel']->getUserId($email)) return true;
        return $this->model['userModel']->getUserId($email)['id'] == $this->data['sub_content']['userToUpdate']['id'];
    }
}
