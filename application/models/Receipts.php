<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Receipts extends CI_Model {
        public function get_all_data(){
            return $this->db->query("SELECT receipts.billed_to AS recipient_name, receipts.billed_email AS recipient_email, 
                                    CONCAT(appointments_backup.patient_firstname, ' ' , appointments_backup.patient_lastname) AS patient_name, appointments_backup.patient_email AS patient_email, 
                                    appointments_backup.appointment_date, treatments.treatment_name, treatments.treatment_cost FROM receipts
                                    INNER JOIN appointments_backup ON receipts.appointment_id = appointments_backup.id
                                    INNER JOIN treatments ON treatments.id = appointments_backup.treatments_id")->result_array();
        }
        
    }