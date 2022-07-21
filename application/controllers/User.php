<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Santri_model');

        $this->load->model('Pembayaran_model');
        $this->load->model('User_model');
    }
    public function index()
    {
        $data['judul'] = "Santri";
        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['santri'] = $this->Santri_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("user/vw_profil", $data);
        $this->load->view("layout/footer", $data);
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Pendaftaran Santri";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $d = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['santri'] = $this->Santri_model->get();
        $this->form_validation->set_rules('nama', 'Nama Santri', 'required', [
            'required' => 'Nama Santri Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Nama Santri Wajib di isi'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal Lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('telp', 'No Telepon Santri', 'required', [
            'required' => 'No Telepon Santri Wajib di isi'
        ]);
        $this->form_validation->set_rules('status_kuliah', 'No Telepon Santri', 'required', [
            'required' => 'No Telepon Santri Wajib di isi'
        ]);
        $this->form_validation->set_rules('kampus', 'Nama Kampus', 'required', [
            'required' => 'Nama Kampus Wajib di isi'
        ]);
        $this->form_validation->set_rules('prodi', 'Nama Prodi', 'required', [
            'required' => 'Nama Prodi Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenjang', 'Nama Prodi', 'required', [
            'required' => 'Nama Prodi Wajib di isi'
        ]);
        $this->form_validation->set_rules('angkatan_kuliah', 'Angkatan Kuliah', 'required', [
            'required' => 'Angkatan Kuliah Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat Santri', 'required', [
            'required' => 'Alamat Santri Wajib di isi'
        ]);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', [
            'required' => 'Kelurahan Wajib di isi'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
            'required' => 'Kecamatan Wajib di isi'
        ]);
        $this->form_validation->set_rules('kabupaten_kota', 'Kabupaten Kota', 'required', [
            'required' => 'Kabupaten Kota Wajib di isi'
        ]);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama_orangtua', 'Nama Orangtua', 'required', [
            'required' => 'Nama Orangtua Wajib di isi'
        ]);
        $this->form_validation->set_rules('telp_orangtua', 'Telepon Orangtua', 'required', [
            'required' => 'Telepon Orangtua Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("user/vw_tambah_santri", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'id_user' => $this->session->userdata('id'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'telp' => $this->input->post('telp'),
                'status_kuliah' => $this->input->post('status_kuliah'),
                'kampus' => $this->input->post('kampus'),
                'prodi' => $this->input->post('prodi'),
                'jenjang' => $this->input->post('jenjang'),
                'angkatan_kuliah' => $this->input->post('angkatan_kuliah'),
                'alamat' => $this->input->post('alamat'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kabupaten_kota' => $this->input->post('kabupaten_kota'),
                'provinsi' => $this->input->post('provinsi'),
                'nama_orangtua' => $this->input->post('nama_orangtua'),
                'telp_orangtua' => $this->input->post('telp_orangtua'),
                'tanggal' => time()

            ];

            $this->Santri_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Santri Berhasil Ditambah!</div>');
            redirect('User/home');
        }
    }
    public function home()
    {
        $data['judul'] = "Home";
        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['santri'] = $this->Santri_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view("user/vw_home", $data);
        $this->load->view("layout/footer");
    }
    public function profil($id)
    {
        $datax['judul'] = "Home";
        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = $this->Santri_model->get_user($id);
        ob_start();
        var_dump($data);
        $result = ob_get_contents(); //or ob_get_clean()
        //ob_end_clean()
    }
    public function hapus($id)
    {
        $this->Santri_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"
        role="alert"><i class="icon fas fa-info-circle"></i>Data santri tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success"
            role="alert"><i class="icon fas fa-check-circle"></i>Data Santri Berhasil Di Hapus!</div>');
        }
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        redirect('Santri');
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Santri";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['santri'] = $this->Santri_model->getById($id);
        $this->form_validation->set_rules('nama', 'Nama Santri', 'required', [
            'required' => 'Nama Santri Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Wajib di isi'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal Lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('telp', 'No Telepon Santri', 'required', [
            'required' => 'No Telepon Santri Wajib di isi'
        ]);
        $this->form_validation->set_rules('foto', 'Foto Santri', 'required', [
            'required' => 'Foto Santri Wajib di isi'
        ]);
        $this->form_validation->set_rules('ktp', 'KTP Santri', 'required', [
            'required' => 'KTP Santri Wajib di isi'
        ]);
        $this->form_validation->set_rules('kk', 'KK Santri', 'required', [
            'required' => 'KK Santri Wajib di isi'
        ]);
        $this->form_validation->set_rules('ijazah', 'Ijazah Terakhir', 'required', [
            'required' => 'Ijazah Terakhir Wajib di isi'
        ]);
        $this->form_validation->set_rules('status_kuliah', 'Status Kuliah', 'required', [
            'required' => 'Status Kuliah Wajib di isi'
        ]);

        $this->form_validation->set_rules('kampus', 'Nama Kampus', 'required', [
            'required' => 'Nama Kampus Wajib di isi'
        ]);
        $this->form_validation->set_rules('prodi', 'Nama Prodi', 'required', [
            'required' => 'Nama Prodi Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenjang', 'Jenjang Kuliah', 'required', [
            'required' => 'Jenjang Kuliah Wajib di isi'
        ]);
        $this->form_validation->set_rules('angkatan_kuliah', 'Angkatan Kuliah', 'required', [
            'required' => 'Angkatan Kuliah Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat Santri', 'required', [
            'required' => 'Alamat Santri Wajib di isi'
        ]);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', [
            'required' => 'Kelurahan Wajib di isi'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
            'required' => 'Kecamatan Wajib di isi'
        ]);
        $this->form_validation->set_rules('kabupaten_kota', 'Kabupaten Kota', 'required', [
            'required' => 'Kabupaten Kota Wajib di isi'
        ]);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama_orangtua', 'Nama Orangtua', 'required', [
            'required' => 'Nama Orangtua Wajib di isi'
        ]);
        $this->form_validation->set_rules('telp_orangtua', 'No Telepon Orangtua', 'required', [
            'required' => 'No Telepon Orangtua Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("santri/vw_ubah_santri", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'telp' => $this->input->post('telp'),
                'status_kuliah' => $this->input->post('status_kuliah'),
                'kampus' => $this->input->post('kampus'),
                'prodi' => $this->input->post('prodi'),
                'jenjang' => $this->input->post('jenjang'),
                'angkatan_kuliah' => $this->input->post('angkatan_kuliah'),
                'alamat' => $this->input->post('alamat'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kabupaten_kota' => $this->input->post('kabupaten_kota'),
                'provinsi' => $this->input->post('provinsi'),
                'nama_orangtua' => $this->input->post('nama_orangtua'),
                'telp_orangtua' => $this->input->post('telp_orangtua'),

            ];
            $upload_image1 = $_FILES['foto']['name'];
            if ($upload_image1) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/santri/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $upload_image2 = $_FILES['ktp']['name'];
            if ($upload_image2) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/santri/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('ktp')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('ktp', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $upload_image3 = $_FILES['kk']['name'];
            if ($upload_image3) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/santri/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('kk')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('kk', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $upload_image4 = $_FILES['ijazah']['name'];
            if ($upload_image4) {
                $config['allowed_types'] = 'gif|jpg|png|pdf';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/santri/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('ijazah')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('ijazah', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id = $this->input->post('id');
            $this->Santri_model->update(['id' => $id], $data, $upload_image1, $upload_image2, $upload_image3, $upload_image4);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Santri Berhasil Diubah!</div>');
            redirect('Santri');
        }
    }
    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Santri";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['santri'] = $this->Santri_model->get_user($id);
        $this->load->view("layout/header", $data);
        $this->load->view("user/vw_detail_user", $data);
        $this->load->view("layout/footer", $data);
    }

    public function pembayaran_tampil($id)
    {
        $data['judul'] = "Halaman Pembayaran";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$d= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['santri'] = $this->Santri_model->get_user($id);
        $data_s = $this->Santri_model->get_user($id);
        
            $this->load->view("layout/header", $data);
            $this->load->view("user/vw_pembayaran", $data);
            $this->load->view("layout/footer");
        
            
    }
    public function pembayaran($id)
    {
        $data['judul'] = "Halaman Pembayaran";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$d= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['santri'] = $this->Santri_model->get_user($id);
        $data_s = $this->Santri_model->get_user($id);
        
     
            $data = [
                'id_user' => $this->session->userdata('id'),
                'id_santri' => $data_s[0]['id'],
                'nama' => $data_s[0]['nama'],
                'total_bayar' => $data_s[0]['total'],
                'tanggal' => time(),
                'pembayaran' => $this->input->post('pembayaran')
            ];

            $this->Pembayaran_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembayaran Berhasil Dibuat!</div>');
            
            redirect('User/home');
        
    }
}
