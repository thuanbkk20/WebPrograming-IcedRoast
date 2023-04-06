<?php
class News extends Controller{
    private $data = [];
    public function index(){
        $this->render("news", $this->data);
    }
}