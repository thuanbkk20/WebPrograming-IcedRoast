<?php
class Site extends Controller{
    public $data=[], $userModel;
    public function __construct()
    {
        $this->userModel = $this->model("UserModel"); 
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
                $userID = $this->userModel->getUserID($_POST['email'])['id'];
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
                'fullname' => 'required|min:5|max:30',
                'phone_number' => 'required|length:10',
                'email' => 'required|email|min:7|unique:user:username',
                'password' => 'required|min:3',
                'confirm_password' => 'required|match:password'
            ]);

            //set message
            $request->message([
                'fullname.required' => 'Họ tên không được để trống',
                'fullname.min' => 'Họ tên phải lớn hơn 5 ký tự',
                'fullname.max' => 'Họ tên phải bé hơn 30 ký tự',
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
                //Tạo user mới
                $new_user = [];
                $new_user['username'] = $_POST['email'];
                $new_user['name'] = $_POST['fullname'];
                $new_user['phone_number'] = $_POST['phone_number'];
                $new_user['password'] = md5($_POST['password']);

                $this->userModel->addUser($new_user);

                $response = new Response();
                $response->reDirect('home');
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