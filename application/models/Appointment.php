<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Appointment extends CI_Model {

        public function get_all_data(){
            return $this->db->query("SELECT customer_infos.id as customer_id, appointments.id AS appointment_id, CONCAT(customer_infos.first_name, ' ', customer_infos.last_name) AS billed_to, 
                                    customer_infos.email_address as billed_email, patient_age AS age, appointments.id AS appointment_id, CONCAT(appointments.patient_firstname, ' ', appointments.patient_lastname) AS name, 
                                    appointments.patient_email as email, treatments.treatment_name as concern ,appointments.appointment_date as date FROM appointments
                                    INNER JOIN treatments ON appointments.treatments_id = treatments.id
                                    INNER JOIN customer_infos ON appointments.customers_info_id = customer_infos.id")->result_array();
        }
        public function insert_approve($insert){

            $query = "INSERT INTO approved_appointments (id, customers_info_id, treatments_id, patient_firstname, patient_lastname, patient_email, appointment_date) VALUES (?,?,?,?,?,?,?)";
            $data = array($insert['id'], $insert['customers_info_id'], $insert['treatments_id'], $insert['patient_firstname'], $insert['patient_lastname']
            , $insert['patient_email'], $insert['appointment_date']);
            return $this->db->query($query, $data); 
        }
        public function insert_to_backup($insert){
            
            $query = "INSERT INTO appointments_backup (id, customers_info_id, treatments_id, patient_firstname, patient_lastname, patient_age, patient_email, appointment_date) VALUES (?,?,?,?,?,?,?,?)";
            $data = array($insert['id'], $insert['customers_info_id'], $insert['treatments_id'], $insert['patient_firstname'], $insert['patient_lastname'], $insert['patient_age'], 
                    $insert['patient_email'], $insert['appointment_date']);
                    return $this->db->query($query, $data); 
        } 

        public function get_insert_data($appointment_id){
            return $this->db->query("SELECT * FROM appointments WHERE id=?", array($appointment_id))->row_array();
        }
        public function delete($insert){
            $query = "DELETE FROM `appointments` WHERE id = ?";
            $data = array($insert);
            return $this->db->query($query, $data);
        }
    }