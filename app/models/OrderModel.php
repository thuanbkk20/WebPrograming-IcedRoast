<?php
/*
    Ke thua tu class Model
*/
class OrderModel extends Model{
    private $_table = 'orders';

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
        return "id,user_id";
    }

    public function addOrder($data){
        $this->db->table($this->_table)->insert($data);
    }

    public function getMaxId(){
        $query = $this->db->query("SELECT max(id) FROM icedroast.orders");
        $data = $query->fetch(PDO::FETCH_ASSOC)['max(id)'];
        return $data;
    }

    public function getAllOrder(){
        $query = $this->db->query("SELECT * FROM icedroast.orders");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getUserOrder($user_id){
        $query = $this->db->query("SELECT * FROM icedroast.orders WHERE user_id = $user_id");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getOrder($id){
        $query = $this->db->query("SELECT * FROM icedroast.orders WHERE id = $id");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getOrder2(){
        $query = $this->db->query("SELECT * FROM icedroast.orders");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        $return = [];
        array_push($return,[]);
        $j = 0;
        for($i=0; $i<count($data); $i++){
            array_push($return[$j],$data[$i]);
            if($i<count($data)-1&&$data[$i]['id']!=$data[$i+1]['id']){
                $j++;
                array_push($return,[]);
            } 
        }
        return $return;
    }
}