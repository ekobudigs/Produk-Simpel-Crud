<?php

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_produk');
    }
    function index()
    {
        $data['barang'] = $this->Model_barang->getDatabarang()->result();
        $this->template->load('template/template', 'barang/view_barang', $data);
    }

}