<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KatalogController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProdukModel');
        $this->load->library('session');
    }
    public function index()
    {
    }
    public function katalog()
    {
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
        } else {
            $data['keyword'] = null;
        }
        $data['produk'] = $this->ProdukModel->getProduk($data['keyword'])->result();
        $data['halaman'] = 'katalog';

        $this->load->view('template', $data);
    }
    public function getKategori($id_kategori)
    {
        $data['produk'] = $this->ProdukModel->getKategori($id_kategori)->result();
        $data['halaman'] = 'katalog';

        $this->load->view('template', $data);
    }
}
