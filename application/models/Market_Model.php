<?php

class Market_Model extends CI_Model
{

    public function getAllProducts()
    {
        $products = $this->db->from('products')->get()->result();

        return $products;
    }

    public function getProductsByType()
    {

    }

}