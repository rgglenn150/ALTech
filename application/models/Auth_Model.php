<?php

class Auth_Model extends CI_Model
{

    public function regsiter($user)
    {
        if ($this->db->from('users')->where('username', $user['username'])->count_all_results() == 0) {
            $this->db->insert('users', $user);
            $id = $this->db->insert_id();
            return $id;
        } else {
            return -1;
        }

    }

    public function login($user)
    {
        $username = $user['username'];
        $password = $user['password'];
        $password_hash = hash('sha256', $password);
        $user = $this->db->from('users')->where('username', $username)->get()->row();
        $passwordS = isset($user) ? $user->password : -1;

        if ($passwordS === $password_hash) {
            $this->session->set_userdata('user_logged_in_id', $user->id);
            return true;
        } else {
            return false;
        }

    }

    public function is_logged_in()
    {
        if ($this->session->userdata('user_logged_in_id') !== null
            &&
            !empty($this->session->userdata('user_logged_in_id'))) {
            return true;
        } else {
            redirect('login');
        }
    }

}
