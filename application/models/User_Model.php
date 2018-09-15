<?php

class User_Model extends CI_Model
{

    public function get_user($id)
    {
        $user = $this->db->from('users')->where('id', $id)->get()->row();
        return !empty($user) ? $user : null;
    }

}
