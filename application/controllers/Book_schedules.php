<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');

    class Book_schedules extends CI_Controller {
        public function index(){
            $this->load->view('/clinic_index/schedule');
        }

        public function book(){
            $form = $this->input->post(NULL, TRUE);
            $this->output->enable_profiler(TRUE);
            $this->load->model('Book_schedule');
            $this->load->library("form_validation");

            $today = date('m-d-Y h:i: A', strtotime("+1 day"));                                     ///// user can only book 1 day ahead of booking for shedule ///
            $time_dummy = date("m-d-Y h:i: A",strtotime($form['date_pref']));

            if($time_dummy > $today){
                $this->form_validation->set_rules("first_name", "First name", "trim|required|alpha");
                $this->form_validation->set_rules("last_name", "Last name", "trim|required|alpha");
                $this->form_validation->set_rules("email_address", "Email", "required|valid_email");
                
                    if($this->form_validation->run() === FALSE) {
                        return $this->load->view('/clinic_index/schedule');
                    } else {
                       $verify = $this->Book_schedule->insert_book($form);
                       if($verify === TRUE){
                            
                            $_SESSION['notification'] = "Successfully Booked!";
                            redirect('book');
                        }
                    }
                } else {
                    $_SESSION['notification_error'] = "Date Invalid! Make sure the date is 1 day ahead today!";
                    redirect('book');
                }

            }
    }
    