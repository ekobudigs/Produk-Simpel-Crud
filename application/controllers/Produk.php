<?php

class Produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
         $this->load->model('Model_produk');
    }
  public  function index()
    {
        $data['produk'] = $this->Model_produk->getDataproduk()->result();
        $this->template->load('template/template', 'produk/index', $data);
    }


   public function simpanproduk()
    {

        $this->form_validation->set_rules('namaproduk', 'Password', 'required|trim|alpha|max_length[150]', [
            'required' => 'Nama Produk Wajib Di isi',
            'alpha' => 'Hanya Tulisan yang bisa di inputkan',
            'max_length' => 'Maksimal 150 Karakter'
        ]);
        $this->form_validation->set_rules('hargaproduk', 'Password', 'required|trim|numeric|max_length[150]', [
            'required' => 'Harga Produk Wajib Di isi',
            'numeric' => 'Hanya Bisa di inputkan angka saja',
            'max_length' => 'Maksimal 25 Karakter'
        ]);
        $this->form_validation->set_rules('kategoriproduk', 'Password', 'required|trim', [
            'required' => 'Kategori Produk Wajib Di isi',
        ]);
        $this->form_validation->set_rules('status', 'Password', 'required|trim', [
            'required' => 'Status Produk Wajib Di isi',
        ]);


        
        if ($this->form_validation->run() == false) {
            $this->template->load('template/template', 'produk/input');
        } else {
            $namaproduk = $this->input->post('namaproduk', true);
            $hargaproduk = $this->input->post('hargaproduk', true);
            $kategoriproduk = $this->input->post('kategoriproduk', true);
            $status = $this->input->post('namaproduk', true);
            $data = [
                'nama_produk' => htmlspecialchars($namaproduk),
                'harga' => htmlspecialchars($hargaproduk),
                'kategori' => htmlspecialchars($kategoriproduk),
                'status' => htmlspecialchars($status),
            ];

         

            $simpan =  $this->Model_produk->insertproduk($data);
            if($simpan == 1) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg>
                  Data Berhasil Di simpan
                </div>');
                redirect("produk");
    
            }else{
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                <i class="fa fa-close"></i>
                  Data Gagal Di simpan
                </div>');
                redirect("produk");
            }
           
        }

        
    }
}