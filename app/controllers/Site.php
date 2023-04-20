<?php
class Site extends Controller{
    public $data=[], $model, $userData = [];
    public function __construct()
    {
        $this->model['userModel'] = $this->model("userModel");
        $this->model['CartModel'] = $this->model("CartModel");
        $data['user'] = [];
        //Lấy user để hiện thông tin trên header
        if(Session::data('user_id')!=null){
            $this->db = new Database();
            $query = $this->db->query("SELECT * FROM user WHERE id = '".Session::data('user_id')."';");
            $this->data['user'] = $query->fetch(PDO::FETCH_ASSOC);
        } 
    }
    public function login(){
        $request = new Request();
        if($request->isPost()){
            //set rules
            $request->rules([
                'email' => 'required|exist:user:username',
                'password' => 'required|correct:user:username:email:password',
            ]);

            //set message
            $request->message([
                'email.required' => 'Email không được để trống',
                'email.exist' => 'Email này chưa được đăng ký',
                'password.required' => 'Mật khẩu không được để trống',
                'password.correct'  => 'Mật khẩu không khớp',
            ]);

            //validate
            $validate = $request->validate();
            if(!$validate){
                Session::Flash('errors',$request->errors());
                Session::Flash('msg','Đã có lỗi xảy ra! Vui lòng kiểm tra lại');
                Session::Flash('old',$request->getFields());
            }else{
                //Trường hợp đăng nhập thành công   
                $userID = $this->model['userModel']->getUserID($_POST['email'])['id'];
                Session::data('user_id',$userID);
                $response = new Response();
                $response->reDirect('home');
            } 
        }
        $this->data['errors'] = Session::Flash('errors');
        $this->data['msg'] = Session::Flash('msg');
        $this->data['old'] = Session::Flash('old');
        $this->render("auth/login", $this->data);
    }

    public function register(){
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
                $new_user['username'] = $_POST['email'];
                $new_user['first_name'] = $_POST['first_name'];
                $new_user['last_name'] = $_POST['last_name'];
                $new_user['phone_number'] = $_POST['phone_number'];
                $new_user['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
                //Tạo user mới
                $this->model['userModel']->addUser($new_user);

                $message = "Bạn đã tạo tài khoản thành công, chuyển đến trang đăng nhập?";
                $url = "/site/login";

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
        $this->data['errors'] = Session::Flash('errors');
        $this->data['msg'] = Session::Flash('msg');
        $this->data['old'] = Session::Flash('old');
        $this->render("auth/register", $this->data);
    }

    public function logout(){
        Session::delete('user_id');
        $response = new Response();
        $response->reDirect('site/login');
    }

    public function error(){
        App::$app->loadError('permission');
    }
}