<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Report extends CI_Model {

        public function treatment_data($date_range){
        
            $date_range['$date_from'] = "2022-". $date_range['month_from'] . "-" . $date_range['day_from'];
            $date_range['$date_to'] = "2022-". $date_range['month_to'] . "-" . $date_range['day_to'];

            $user_count = $this->db->query("SELECT CONCAT(customer_infos.first_name, ' ', customer_infos.last_name) AS Name, COUNT(customers_info_id) as appointment_count, 
                                            appointments_backup.customers_info_id AS user_id FROM appointments_backup
                                            INNER JOIN customer_infos ON appointments_backup.customers_info_id = customer_infos.id
                                            WHERE appointment_date BETWEEN (?) AND (?)
                                            GROUP BY appointments_backup.customers_info_id", array($date_range['$date_from'], $date_range['$date_to']))->result_array();

            $age_chart = $this->db->query("SELECT patient_age, COUNT(patient_age) AS patient_age FROM appointments
                            WHERE appointment_date BETWEEN (?) AND (?)
                            GROUP BY patient_age", array($date_range['$date_from'], $date_range['$date_to']))->result_array();

            $treatments_chart = $this->db->query("SELECT treatments.treatment_name, COUNT(treatments_id) AS count FROM appointments
                                                INNER JOIN treatments on treatments.id = appointments.treatments_id
                                                WHERE appointment_date BETWEEN (?) AND (?)
                                                GROUP BY treatments_id
                                                ORDER BY treatments_id ASC", array($date_range['$date_from'], $date_range['$date_to']))->result_array();
                             
            $chart_data = array('user_count' => $user_count,
                                    'age_chart' => $age_chart,
                                    'treatments_chart' => $treatments_chart);
            return $chart_data;  
              
        }


    }