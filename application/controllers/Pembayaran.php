<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
       // $this->load->model('Santri_model');
    }
    public function index()
    {
        $data['judul'] = "Pembayaran";
        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pembayaran'] = $this->Pembayaran_model->get();
       
        $this->load->view("layout/header", $data);
        $this->load->view("pembayaran/vw_pembayaran", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Pembayaran";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pembayaran'] = $this->Pembayaran_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("pembayaran/vw_tambah_pembayaran", $data);
        $this->load->view("layout/footer");
    }
    public function hapus($id)
    {
        $this->Pembayaran_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Pembayaran tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Pembayaran Berhasil Dihapus!</div>');
        }
        redirect('Pembayaran');
    }

    function edit()
    {
        $data['judul'] = "Pembayaran";
        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pembayaran'] = $this->Pembayaran_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("pembayaran/vw_ubah_pembayaran", $data);
        $this->load->view("layout/footer");
    }
}
