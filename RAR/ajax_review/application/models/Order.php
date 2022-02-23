<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Order extends CI_Model {
    public function get_all(){
        return $this->db->query("SELECT * FROM orders ")->result_array();
    }
    public function create($data){
        $query = "INSERT INTO `orders`( `order_name`, `order_quantity`) VALUES (?,?)";
        $data = array($data['name'], $data['quantity']);
        return $this->db->query($query, $data);
    }
    public function delete($id){
        return $this->db->query("DELETE FROM `orders` WHERE id = (?)", array($id['id']));
    }
    public function update($data){
        $query = "UPDATE `orders` SET order_name = (?), order_quantity = (?) WHERE id = (?)";
        $insert = array($data['order_name'], $data['order_quantity'], $data['id']);
        return $this->db->query($query, $insert);
    }
}