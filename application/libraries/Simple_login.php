<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        // load data model user
        $this->CI->load->model('user_model');
        
    }

    //fungsi login 
    public function login($username, $password)
    {
        $check = $this->CI->user_model->login($username, $password);
        // Jika ada data user, maka create session login
        if ($check){
            $id_user    = $check->id_user;
            $nama       = $check->nama;
            $akses_level= $check->akses_level;
            //create session
            $this->CI->session->set_userdata('id_user', $id_user);
            $this->CI->session->set_userdata('nama', $nama);
            $this->CI->session->set_userdata('username', $username);
            $this->CI->session->set_userdata('akses_level', $akses_level);
            //redirect kehalaman admin yang di proteksi
            redirect(base_url('admin'),'refresh');
            
        }else{
            // kalau tidak benar/ada, suruh login lagi.
            $this->CI->session->set_flashdata('warning', 'Username atau Password salah');
            redirect(base_url('admin/login'),'refresh');
        }
    
    }

    // fungsi cek login
    public function cek_login()
    {
        if( $this->CI->session->userdata('username') == "" ){
            $this->CI->session->set_flashdata('warning', 'Anda Belum Login');
            redirect(base_url('admin/login'),'refresh');
        }
    }

    // fungsi log out 
    public function logout()
    {
        // membuang semua session login 
        $this->CI->session->unset_userdata('id_user');
        $this->CI->session->unset_userdata('nama');
        $this->CI->session->unset_userdata('username');
        $this->CI->session->unset_userdata('akses_level');
        // setelah semua dibuang, redirect ke login
        $this->CI->session->set_flashdata('sukses', 'Anda Berhasil logout');
        redirect(base_url('admin/login'),'refresh');
    }

    

}

/* End of file Simple_login.php */

?>