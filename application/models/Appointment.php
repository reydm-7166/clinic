<?php 

    class Appointment extends CI_Model {

        public function get_all_data(){
            return $this->db->query("SELECT CONCAT(appointments.patient_firstname, ' ', appointments.patient_lastname) AS name, 
                            appointments.patient_email as email, treatments.treatment_name as concern ,appointments.appointment_date as date FROM appointments
                            INNER JOIN treatments ON appointments.treatments_id = treatments.id")->row_array();
        }
        
    }