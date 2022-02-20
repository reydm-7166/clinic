<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Approved extends CI_Model {

        public function get_all_data(){
            return $this->db->query("SELECT *, approved_appointments.id AS main_id FROM `approved_appointments`
                                    INNER JOIN treatments ON approved_appointments.treatments_id = treatments.id")->result_array();
        }

        public function get_insert_receipt($appointment_id){
            return $this->db->query("SELECT customer_infos.id as customer_id, approved_appointments.id AS appointment_id, CONCAT(customer_infos.first_name, ' ', customer_infos.last_name) AS billed_to, 
                                    customer_infos.email_address as billed_email, approved_appointments.id AS appointment_id, CONCAT(approved_appointments.patient_firstname, ' ', approved_appointments.patient_lastname) AS name, 
                                    approved_appointments.patient_email as email, treatments.treatment_name as concern ,approved_appointments.appointment_date as date FROM approved_appointments
                                    INNER JOIN treatments ON approved_appointments.treatments_id = treatments.id
                                    INNER JOIN customer_infos ON approved_appointments.customers_info_id = customer_infos.id 
                                    WHERE approved_appointments.id=?", array($appointment_id))->row_array();
        }

        public function insert_receipt($insert){
            $query = "INSERT INTO receipts (customer_id, appointment_id, billed_to, billed_email) VALUES (?,?,?,?)";
            $data = array($insert['customer_id'], $insert['appointment_id'], $insert['billed_to'], $insert['billed_email']); 
            return $this->db->query($query, $data);
        } 

        public function delete($delete){
            $query = "DELETE FROM `approved_appointments` WHERE id = ?";
            $data = array($delete);
            return $this->db->query($query, $data);
        }
    }

        
    // $query ="INSERT INTO `receipts`(`customer_id`, `appointment_id`, `billed_to`, `billed_email`) VALUES (?,?,?,?);";
    //         $data = "";
    //         return $this->db->query();