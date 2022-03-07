<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Manages_admin extends CI_Controller {
        /*
        * Loads the necessary library and model:: upload file library and model
        * $treatments and services in construct method so that when page is loaded it will fetch all data right away and display it
        * Save it to session and display
        */
        public function __construct(){
            parent::__construct();
            $this->load->library('upload');
            $this->load->helper('form');
            
            $this->load->model('get_treatment_option');
            $treatments = $this->get_treatment_option->get_all_treatments();
            $services = $this->get_treatment_option->get_all_services();
            if($treatments){
                $this->session->set_userdata('treatment_contents', $treatments);
            }
            if($services){
                $this->session->set_userdata('services_contents', $services);
           }
        }
        public function index(){
            $this->load->view('/admin_index/admin_contents');
        } 
        /*
        * Takes a parameter of $id which will came ffrom the form in edit page of manage contents.
        * We will use the id for reference later in the database when we edit the data
        * if editing of data is successful redirect to manage content index and display a notification that it was edited successfully.
        * REDIRECTS TO CONTENT METHOD BELOW TO SHOW THE TABLE FOR EDITING
        */
        public function edit($id){
            $verify = $this->get_treatment_option->edit($id);
            if($verify){
                $this->session->set_userdata('edit_contents', $verify);
                redirect('editcontent');
            }
        }
        /*
        * The content method shows the data of the selected $id row above (reference:: edit method line 32)
        * Showing the row of the $id above for editing. 
        */
        public function content(){
            $this->load->view('/admin_index/edit_admin_contents');
        }
        /*
        * This method takes again 1 parameter coming from the edit page of manage contents which will be
        *  referenced for deleting the row in the database ($id)
        */
        public function delete($id){
            var_dump($id);
           $verify = $this->get_treatment_option->delete($id);
           if($verify){
               $_SESSION['deleted_treatment'] = "Successfully Deleted!";
               redirect('manage');
           }
        }
        /*
        * This edit_insert method is for 
        *       I.editing/replacing the treatment_name in the database of the file name of the image that will be uploaded
        *       II. uploading the new image that will be used to upadate the contents in the website. Save it to ../../uploads folder (contains images from input)
        *       III. if success redirect to manage page to index which will display a notification informing succession on updating and inserting new image
        */
        public function edit_insert(){       
            $data = $this->input->post(NULL, TRUE);
            if($data['submit']){
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 2024;
                $config['max_height']           = 2468;

                $this->upload->initialize($config);
                if (empty($_FILES['userfile']['name'])) {
                    $data['file_name'] = $data['treatment_image'];
                    $verify = $this->get_treatment_option->edit_treatments($data); 
                }else {
                    if($this->upload->do_upload('userfile')) {
                        $data['file_name'] = $_FILES['userfile']['name'];
                        $verify = $this->get_treatment_option->edit_treatments($data);
                    } 
                }
                $_SESSION['success'] = "Successfully updated!";
                redirect('manage');
            }      
        }
        /*
        * This inserts new data to treatments table just like the [EDIT INSERT METHOD::reference line 62]
        */
        public function add(){
            $data = $this->input->post(NULL, TRUE);
            if($data['submit']){
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 2024;
                $config['max_height']           = 2468;

                $this->upload->initialize($config);
                if($this->upload->do_upload('userfile')) {
                    $data['file_name'] = $_FILES['userfile']['name'];
                    $verify = $this->get_treatment_option->add($data);

                    if($verify){
                        $_SESSION['added_success'] = "Added Succesfully!";
                        redirect('manage');
                    }
                }

            }
        }
        
    }