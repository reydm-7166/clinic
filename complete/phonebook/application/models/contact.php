<?php

    class Contact extends CI_Model {
        public function get_all_contact(){
            return $this->db->query("SELECT * FROM contacts")->result_array();
        }
        public function getby_contactid($contact_id){
            return $this->db->query("SELECT * FROM contacts WHERE id= ?",
                                    array($contact_id))->row_array();
        }
        public function db_addnew_contact($add_contact){
            $query = "INSERT INTO contacts (name, number) VALUES (?,?)";
            $data = array($add_contact['name'], $add_contact['number']);
            return $this->db->query($query, $data);
        }
        public function edit_contact($edit_id, $by_id_edit){
            $query = "UPDATE contacts 
                      SET name = (?), number = (?) 
                      WHERE ID = $edit_id";
            $data = array($by_id_edit['name'], $by_id_edit['number']);
            return $this->db->query($query, $data);
        }
        public function delete_contact($to_delete){
            return $this->db->query("DELETE FROM contacts WHERE id = (?)",
                                    array($to_delete['0']));
        }
    }