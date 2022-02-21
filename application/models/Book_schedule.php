<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Book_schedule extends CI_Model {
        public function insert_book($form){
            $query = "INSERT INTO appointments (customers_info_id, treatments_id, patient_firstname, patient_lastname, patient_age, patient_email, appointment_date)
                        VALUES(?,?,?,?,?,?,?)";
            $insert = array($form['id'], $form['category'], $form['first_name'], $form['last_name'], $form['age'], $form['email_address'] , $form['date_pref']);
            
            return $this->db->query($query, $insert);
        }
    }