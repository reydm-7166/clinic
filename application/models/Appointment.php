<?php 

    class Appointment extends CI_Model {

        public function get_all_data(){
            return $this->db->query("SELECT customer_infos.id as customer_id, appointments.id AS appointment_id, CONCAT(customer_infos.first_name, ' ', customer_infos.last_name) AS billed_to, 
                                    customer_infos.email_address as billed_email, appointments.id AS appointment_id, CONCAT(appointments.patient_firstname, ' ', appointments.patient_lastname) AS name, 
                                    appointments.patient_email as email, treatments.treatment_name as concern ,appointments.appointment_date as date FROM appointments
                                    INNER JOIN treatments ON appointments.treatments_id = treatments.id
                                    INNER JOIN customer_infos ON appointments.customers_info_id = customer_infos.id")->result_array();
        }
        public function insert_receipts($insert){
            $query = "INSERT INTO `receipts`( `customer_id`, `appointment_id`, `billed_to`, `billed_email`) VALUES (?,?,?,?)";
            $data = array($insert[0]['customer_id'], $insert[0]['appointment_id'], $insert[0]['billed_to'], $insert[0]['billed_email']);
            return $this->db->query($query, $data); 
        } 
    }