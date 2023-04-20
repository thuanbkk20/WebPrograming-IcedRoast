<?php
/*
    Ke thua tu class Model
*/
class NewsModel extends Model{
    private $_table = 'news';

    function __construct(){
        parent::__construct();
    }

    function tableFill(){
        return $this->_table;
    }

    function fieldFill()
    {
        return "*";
    }

    function primaryKey()
    {
        return "id";
    }

    public function getAllNews(){
        $data = $this->db->table($this->_table)->getAll();
        return $data;
    }

    public function getCoffeeholic(){
        $data = $this->db->table($this->_table)->where('tag','=','coffeeholic')->getAll();
        return $data;
    }
    
    public function getTeaholic(){
        $data = $this->db->table($this->_table)->where('tag','=','teaholic')->getAll();
        return $data;
    }

    public function getBlog(){
        $data = $this->db->table($this->_table)->where('tag','=','blog')->getAll();
        return $data;
    }
}