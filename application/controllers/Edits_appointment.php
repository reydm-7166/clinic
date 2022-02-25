<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');

    class Edits_appointment extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Edit_appointment');
            $this->load->library("form_validation");
        }
         /*___________________________________________________________________________________________________________ 
        |  Fetch data from model (Edit_appointment) and store it in to_edit session data and                             |
        |  display it in index, redirects first to view function                                                      |
        |___________________________________________________________________________________________________________ */
        public function index($id){
            $verify = $this->Edit_appointment->get_data($id);
            if($verify){
                $this->session->set_userdata('to_edit', $verify);
            }
            redirect('edit');                                                         
        }
        /*___________________________________________________________________________________________________________ 
        |   Fetch data from form and store it in $update_form array and pass it to our model (Edit_appointment)     |
        |    and method of update_appointment, if saved is clicked. else redirect to appointments page and          |
        |   leave edit_appointment controller                                                                       |
        |                                                                                                           |
        |   Sets the time first to standard and just added the validation from the original booking so that we won't|
        |   have any inconsist and invalid data in database                                                         |
        |___________________________________________________________________________________________________________ */    
        public function update_appointment(){
            $updated_form = $this->input->post(NULL, TRUE);

            print_r($updated_form);

            if($this->input->post('Save')){
                $today = date('m-d-Y h:i: A', strtotime("+1 day"));                                     
                $time_dummy = date("m-d-Y h:i: A",strtotime($updated_form['edit_date']));
                $this->output->enable_profiler(TRUE);
                if($time_dummy > $today){
                    $this->form_validation->set_rules("edit_firstname", "First name", "trim|required|alpha");
                    $this->form_validation->set_rules("edit_lastname", "Last name", "trim|required");
                    $this->form_validation->set_rules("edit_age", "Age", "trim|required|numeric");
                    $this->form_validation->set_rules("edit_email", "Email", "required|valid_email");
                        
                    if($this->form_validation->run() === FALSE) {                   ///// if there is error in the validation, data won't go to the database
                        return $this->load->view('admin_index/edit_appointment');
                    } else {
                        $verify = $this->Edit_appointment->update_data($updated_form);  ///// else (no errors) run the query and update the database and redirect back to appointments
                        if($verify){
                            $_SESSION['approved'] = "Edited Successfully!";
                            redirect('appointment');
                        }
                    }
                }
                $_SESSION['notification_error'] = "Date Invalid! Make sure the date is 1 day ahead today!";
                redirect('edit');
            } 
       redirect('appointment');                                            ///// if cancelled button is clicked redirect back to appointment
    }  

     /*___________________________________________________________________________________________________________ 
        |  DELETE DATA FROM APPOINTMENTS // references:: Edit_appointment (MODEL)                                 |
        |________________________________________________________________________________________________________ */   

        public function delete_data($id){
            $verify = $this->Edit_appointment->delete_data($id);
            if($verify){
                $_SESSION['deleted'] = "Successfully deleted!";
                redirect('appointment');
            }
        }

        public function view(){
            $this->load->view('admin_index/edit_appointment');
        }
    }