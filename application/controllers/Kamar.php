<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kamar_model');
    }
        public function index()
    {
        $data['judul'] = "Kamar";
        
        $data['kamar'] = $this->Kamar_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("kamar/vw_kamar", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Kamar";

       

        $this->form_validation->set_rules('type_kamar', 'Type Kamar', 'required', [
            'required' => 'Type Kamar Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_kamar', 'No Kamar', 'required', [
            'required' => 'No Kamar Wajib di isi'
        ]);
        $this->form_validation->set_rules('asrama',  'Asrama', 'required', [
            'required' => 'Asrama Wajib di isi'
        ]);
        
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("kamar/vw_tambah_kamar", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'type_kamar' => $this->input->post('type_kamar'),
                'no_kamar' => $this->input->post('no_kamar'),
                'asrama' => $this->input->post('asrama'),
                'status' => $this->input->post('status'),
            ];
            $this->Kamar_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kamar Berhasil Ditambah!</div>');
            redirect('Kamar');
        }
    }
    public function hapus($id)
    {
        $this->Kamar_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success"
        role="alert">Data Kamar Berhasil Di Hapus!</div>');
        redirect('Kamar');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Kamar";
        $data['kamar'] = $this->Kamar_model->getById($id);
        

        $this->form_validation->set_rules('type_kamar', 'Type Kamar', 'required', [
            'required' => 'Type Kamar Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_kamar', 'No Kamar', 'required', [
            'required' => 'No Kamar Wajib di isi'
        ]);
        $this->form_validation->set_rules('asrama',  'Asrama', 'required', [
            'required' => 'Asrama Wajib di isi'
        ]);
        $this->form_validation->set_rules('status',  'Status', 'required', [
            'required' => 'Status Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("kamar/vw_ubah_kamar", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'type_kamar' => $this->input->post('type_kamar'),
                'no_kamar' => $this->input->post('no_kamar'),
                'asrama' => $this->input->post('asrama'),
                'status' => $this->input->post('status'),                
            ];
            $this->Kamar_model->update($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kamar Berhasil Diubah!</div>');
            redirect('Kamar');
        }
    }
}
