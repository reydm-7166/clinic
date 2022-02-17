<?php 

    class Contacts extends CI_Controller {
                                                                                            //////////// index process page ///////////////
                                                                                            // I made the index method as the process of showing the contacts
                                                                                            // so that whenever it is load or the button "back" is clicked it would refresh 
                                                                                            // re-query to the database so that if it is edited or deleted it would update
                                                                                            // immediately as it goes back to index. 
        public function index(){
            $this->output->enable_profiler(TRUE);
            $this->load->model("Contact");
            $all_contacts = $this->Contact->get_all_contact();
            $this->session->set_userdata('allcontacts', $all_contacts);
            redirect('Contacts/home');
        }
        public function show($contact_id){                                                            //////////// show contact process page ///////////////
            $this->output->enable_profiler(TRUE);
            $this->load->model('Contact');
            $by_id_contact = $this->Contact->getby_contactid($contact_id);
            $this->session->set_userdata('by_id_contact', $by_id_contact);   
            $this->load->view('/contact/show');
        }
        public function new(){                                                            //////////// add new contact page ///////////////
            $this->load->view('/contact/new');
        }
        public function edit($to_edit_id){                                           //////////// get the id and store it to session then pass it to next page ///////////////
            $this->session->set_userdata('to_edit', $to_edit_id);
            $this->load->view('/contact/edit');
        }
        public function edit_process($edit_id){                                       //////////// editing process page ///////////////
            $this->output->enable_profiler(TRUE);
            $this->load->model('Contact');
            $edit_data = $this->input->post(NULL, TRUE);   
            $verify = $this->Contact->edit_contact($edit_id, $edit_data);
            if($verify === TRUE){
                $_SESSION['notification'] = "Successfully Edited!";
            } 
            redirect('/Contacts/index');
        }
        public function home(){                                                       //////////// home page ----- this is the homepage now (contacts page)///////////////
            $this->load->view('/contact/home');
        }
        public function addnew_process(){                                             //////////// add new contact process page ///////////////
            $this->output->enable_profiler(TRUE);
            $this->load->model('Contact');
            $this->input->post();
            $add_contact = $this->input->post(NULL, TRUE);
            $verify = $this->Contact->db_addnew_contact($add_contact);
            if($verify === TRUE){
                $_SESSION['notification'] = "Successfully Added!";
                redirect('/Contacts/new');
            } 
        }
        public function delete_process($delete_id){
            $this->session->set_userdata('to_delete', $delete_id);
            $to_delete[] =  $this->session->userdata('to_delete');
            $this->output->enable_profiler(TRUE);
            $this->load->model('Contact');

            $verify = $this->Contact->delete_contact($to_delete);

            if($verify === TRUE){
                $_SESSION['notification'] = "Successfully Deleted!";
            } 
            redirect('/Contacts/index');
        }
    }