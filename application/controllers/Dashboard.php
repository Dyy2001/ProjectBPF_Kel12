<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Kamar_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Dashboard";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/dashboard", $data);
        $this->load->view("layout/footer");
    }
}
