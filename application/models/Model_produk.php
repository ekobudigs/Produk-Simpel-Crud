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

    

    function getproduk($idproduk)
    {
        return $this->db->get_where('produk', array('id_produk' => $idproduk));

    }

    function updateproduk($data, $idproduk)
    {
    	$simpan = $this->db->update('produk', $data, array('id_produk' => $idproduk));

    	 if($simpan) {
           return 1;
       }else{
           return 0;
       }

    }


     function deleteproduk($idproduk)
    {
    	$hapus = $this->db->delete('produk', array('id_produk' => $idproduk));

    	 if($hapus) {
           return 1;
       }else{
           return 0;
       }
    }





}