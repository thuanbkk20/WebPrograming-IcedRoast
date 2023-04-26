<?php
class contact extends Controller{
    public $data = [], $model = [];

    public function __construct(){
        //construct
        $this->data['user']= [];
        $this->model['ContactModel'] = $this->model('ContactModel');
        $this->data['user']['first_name'] = '';
        //Lấy user để hiện thông tin trên header
        if(Session::data('user_id')!=null){
            $this->db = new Database();
            $query = $this->db->query("SELECT * FROM user WHERE id = '".Session::data('user_id')."';");
            $this->data['user'] = $query->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function index(){
        $request = new Request();
        if($request->isPost()){
            //set rules
            $request->rules([
                'fullname' => 'required|max:50',
                'phonenumber' => 'required|length:10',
                'email' => 'required|email|min:7',
                'detail' => 'required|min:20|max:500'
            ]);

            //set message
            $request->message([
                'fullname.required' => 'Họ tên không được để trống',
                'fullname.max' => 'Họ tên phải bé hơn 50 ký tự',
                'phonenumber.required' => 'Số điện thoại không được để trống',
                'phonenumber.length' => 'Độ dài của số điện thoại là 10',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Định dạng email không hợp lệ',
                'email.min' => 'Email phải lớn hơn 7 ký tự',
                'detail.required' => 'Lời nhắn không được để trống',
                'detail.min'  => 'Lời nhắn phải lớn hơn 20 ký tự',
                'detail.max'  => 'Lời nhắn phải ít hơn 500 ký tự'
            ]);

            //validate
            $validate = $request->validate();
            if(!$validate){
                Session::Flash('errors',$request->errors());
                Session::Flash('msg','Đã có lỗi xảy ra! Vui lòng kiểm tra lại');
                Session::Flash('old',$request->getFields());
            }else{
                $contact['name'] = trim($_POST['fullname']);
                $contact['phone_number'] = trim($_POST['phonenumber']);
                $contact['email'] = trim($_POST['email']);
                $contact['detail'] = trim($_POST['detail']);
                $this->model['ContactModel']->addContact($contact);

                $message = "Bạn đã để lại thông tin liên hệ thành công, chuyển đến trang chủ?";
                $url = "/home";

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
        $this->data["content"] = 'contact';
    
        //Render view
        $this->render('layouts/client_layout', $this->data);
    }
}