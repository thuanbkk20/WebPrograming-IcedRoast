<?php
class AuthMiddleware extends Middleware{
    function handle(){
        $model = Load::model('HomeModel');
        var_dump($model);
        if(Session::data('admin_login')==null){
            $response = new Response();
            echo Session::data();
            echo 'Middleware - handle <pre>';
        }
    }
}