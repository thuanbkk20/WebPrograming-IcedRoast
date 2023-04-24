<?php
/*
    Ke thua tu class Model
*/
class ContactModel extends Model{
    private $_table = 'contact';

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

    public function getAll(){
        $data = $this->db->table($this->_table)->getAll();
        return $data;
    }

    public function addContact($data){
        $this->db->table($this->_table)->insert($data);
    }

    public function deleteContact($id){
        $this->db->table($this->_table)->where('id','=',$id)->delete();
    }
}