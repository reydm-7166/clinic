<?php

    class Receipts extends CI_Model {
        public function get_all_data(){
            return $this->db->query("SELECT receipts.billed_to AS recipient_name, receipts.billed_email AS recipient_email, 
                                    CONCAT(appointments.patient_firstname, ' ' , appointments.patient_lastname) AS patient_name, appointments.patient_email AS patient_email, 
                                    appointments.appointment_date, treatments.treatment_name, treatments.treatment_cost FROM receipts
                                    INNER JOIN appointments ON receipts.appointment_id = appointments.id
                                    INNER JOIN treatments ON treatments.id = appointments.treatments_id")->result_array();
        }
        
    }