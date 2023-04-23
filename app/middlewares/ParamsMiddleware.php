<?php
class ParamsMiddleware extends Middleware{
    public function handle(){
        $response = new Response();
        //Check xem tac vu co yeu cau la member khong
        $arr = explode("/",$_SERVER['REQUEST_URI']);
        $memberFlag = $arr[1]=='member'?1:0;

        if(!Session::data('user_id') && $memberFlag){
            $response->reDirect('site/login');
        }
        
        $user = $this->db->table('user')->where('id','=',Session::data('user_id'))->getFirst();
        //Check xem tac vu co yeu cau la admin khong
        $arr = explode("/",$_SERVER['REQUEST_URI']);
        $adminFlag = $arr[1]=='admin'?1:0;
        if($adminFlag && $user['role']!='admin'){
            $response->reDirect('loadError/permission');
            // header("Location: $url");
        }
    }
}