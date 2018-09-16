<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Market extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Market_Model');

    }

    public function index($prod_id = null)
    {
        

        $data["products"] = $this->Market_Model->getAllProducts();
 
        $this->load->view("market", $data);
    }

}