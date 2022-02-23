<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Orders extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Order');

  }
  public function index(){
    $verify['partials'] = $this->Order->get_all();
    $this->load->view("partials/quotes", $verify);

  }
  public function create(){
    $data = $this->input->post();

    $this->Order->create($data);
    //get data fromdb after inserting

    $verify['partials'] = $this->Order->get_all();

    $this->load->view("partials/quotes", $verify);
  }

  public function update(){
    $data = $this->input->post();  

        $this->Order->update($data);
        //get data fromdb after update

        $verify['partials'] = $this->Order->get_all();

        $this->load->view("partials/quotes", $verify);

    }


  public function delete(){
    $verify = $this->input->post();
    $this->Order->delete($verify);

    $verify['partials'] = $this->Order->get_all();

    $this->load->view("partials/quotes", $verify);
  }

  public function home(){
    $this->load->view('index');
  }

}