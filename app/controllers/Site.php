<?php
class Site extends Controller{
    public $data = [], $model = [];

    public function __construct(){
        //construct
    }

    public function index(){
        //index

    }

    public function login(){
        $request = new Request();
        
        if($request->isPost()){
            //set rules
            // $request->rules([
            //     'fullname' => 'required|min:5|max:30',
            //     'age' => 'required|callback_check_age',
            //     'email' => 'required|email|min:7|unique:users:email',
            //     'password' => 'required|min:3',
            //     'confirm_password' => 'required|match:password'
            // ]);

            $request->rules([
                'fullname' => 'required|min:5|max:30',
                'age' => 'required|callback_check_age',
                'email' => 'required|email|min:7',
                'password' => 'required|min:3',
                'confirm_password' => 'required|match:password'
            ]);

            //set message
            $request->message([
                'fullname.required' => 'Họ tên không được để trống',
                'fullname.min' => 'Họ tên phải lớn hơn 5 ký tự',
                'fullname.max' => 'Họ tên phải bé hơn 30 ký tự',
                'age.required' => 'Tuổi không được để trống',
                'age.callback_check_age' => 'Tuổi không được nhỏ hơn 20',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Định dạng email không hợp lệ',
                'email.min' => 'Email phải lớn hơn 7 ký tự',
                // 'email.unique' => 'Email đã tồn tại trong hệ thống',
                'password.required' => 'Mật khẩu không được để trống',
                'password.min'  => 'Mật khẩu phải lớn hơn 3 ký tự',
                'confirm_password.required' => 'Xác nhận mật khẩu không được để trống',
                'confirm_password.match' => 'Mật khẩu nhập lại không khớp'
            ]);

            //validate
            $validate = $request->validate();
            if(!$validate){
                Session::Flash('msg','Đã có lỗi xảy ra! Vui lòng kiểm tra lại');
                $response = new Response();
                $response->reDirect('site/login');
            }else{
                echo 'Bạn đã tạo tài khoản thành công';
            }
        }else{
            $this->data['msg'] = Session::Flash('msg');
            $this->render("users/add", $this->data);
        }
    }

    public function check_age($age){
        return $age>=20;
    }
}