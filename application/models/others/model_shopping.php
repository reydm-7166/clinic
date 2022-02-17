<?php 

    class model_shopping extends CI_Model {
        public function show_cart_items(){
            return $this->db->query("SELECT * FROM cart_items")->result_array();
        }
        public function add_cart_items($add_cart){
            $query = "INSERT INTO `cart_items`(`item_name`, `Quantity`, `Price`) VALUES(?,?,?)";
            $data = array($add_cart['item_name'], $add_cart['quantity'], $add_cart['price']);
            return $this->db->query($query, $data); 
        }
        public function delete_cart_items($id){
            return $this->db->query("DELETE FROM cart_items 
                                    WHERE id =?", $id);
        }
    }