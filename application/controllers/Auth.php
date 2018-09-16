<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_Model');

    }

    public function index()
    {
        print_r(hash('sha256', 'test') . '<br>');
        print_r(hash('sha256', 'test'));

    }

    public function login_page($data = '')
    {
        //print_r('test');
        $this->load->view('login_page', $data);
    }

    public function register_page($type = '')
    {

        if (empty($type)) {
            $this->load->view('account_selection_page');
        } else {
            if (strcasecmp($type,'Supplier') || strcasecmp($type,'Business') || strcasecmp($type,'Consumer')) {
                $data['type'] = $type;
                $this->load->view('register_page', $data);
            } else {
                $this->load->view('account_selection_page');
            }
        }
    }

    public function save_registration()
    {
        $data['username'] = $this->input->post('username');
        $data['password'] = hash('sha256', $this->input->post('password'));
        $data['first_name'] = $this->input->post('first_name');
        $data['middle_name'] = $this->input->post('middle_name');
        $data['last_name'] = $this->input->post('last_name');
        $data['type'] = $this->input->post('type');
        $data['email'] = $this->input->post('email');
        
        $data['date_created'] = Date('Y-m-d h:i:s');

        if ($data['password'] !== hash('sha256', $this->input->post('password2'))) {
            print_r('failed');
            redirect('Auth/register_page', $data);

        } else {
            $id = $this->Auth_Model->regsiter($data);
            print_r($id);
            if ($id > 0) {
                redirect('Auth/login_page');

            } else {
                print_r('failed');
                redirect('Auth/register_page', $data);
            }

            print_r('success');
        }

    }

    public function login_user()
    {
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        if ($this->Auth_Model->login($data)) {
            redirect('dashboard');
        } else {
            $data['error'] = 'Username or Password is Incorrect';
            $this->load->view('login_page', $data);
        }

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

  public function test()
    {
        $data["sample"] = $this->input->get("device_id");
        echo json_encode($data);
    }}
