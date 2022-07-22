<?php

class Model_produk extends CI_Model
{
	function getdataproduk()
	{
		return $this->db->get('produk');
	}

	function insertproduk($data)
    {
       $simpan = $this->db->insert('produk', $data);
       if($simpan) {
           return 1;
       }else{
           return 0;
       }
    }

    

    function getproduk($kodeproduk)
    {
        return $this->db->get_where('produk', array('kode_produk' => $kodeproduk));

    }

    function updateproduk($data, $kodeproduk)
    {
    	$simpan = $this->db->update('produk', $data, array('kode_produk' => $kodeproduk));

    	 if($simpan) {
           return 1;
       }else{
           return 0;
       }

    }


     function deleteproduk($kodeproduk)
    {
    	$hapus = $this->db->delete('produk', array('kode_produk' => $kodeproduk));

    	 if($hapus) {
           return 1;
       }else{
           return 0;
       }
    }





}