<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('berita_model');
        $this->load->library('upload');
    }

    public function index(){
    	$berita 	= $this->berita_model->listing();
    	$data 		= array(	'title' 	=> 'Kabar Forsad',
    							'isi'		=> 'user/berita/list',
    							'berita'	=> $berita );
    	$this->load->view('user/layout/wrapper', $data, FALSE);
    }
    
    public function simpan_post(){
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                // $config['quality']= '60%';
                // $config['width']= 710;
                // $config['height']= 420;
                $config['new_image']= './assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar         =$gbr['file_name'];
                $jdl            =$this->input->post('judul');
                $berita         =$this->input->post('berita');
                $departemen     =$this->input->post('departemen');
                $penulis        =$this->input->post('penulis');
                $keterangan     =$this->input->post('keterangan');
 
                $this->berita_model->simpan_berita($jdl,$berita,$gambar,$departemen, $penulis, $keterangan);
                $this->session->set_flashdata('sukses', 'Berita Berhasil Dipost');
            	redirect(base_url('berita/tulis_berita'),'refresh'); 
        }
        // else{
        //     redirect('berita');
        // }
                      
         }
        //else{
        //     redirect('berita');
        // }
                 
    }

    // edit post
    public function edit_post(){
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                // $config['quality']= '60%';
                // $config['width']= 710;
                // $config['height']= 420;
                $config['new_image']= './assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar         =$gbr['file_name'];
                $jdl            =$this->input->post('judul');
                $berita         =$this->input->post('berita');
                $departemen     =$this->input->post('departemen');
                $penulis        =$this->input->post('penulis');
                $keterangan     =$this->input->post('keterangan');
 
                $this->berita_model->edit2($jdl,$berita,$gambar,$departemen, $penulis, $keterangan);
                $this->session->set_flashdata('sukses', 'Berita Berhasil Diedit');
                redirect(base_url('berita/tulis_berita'),'refresh'); 
        }
         else{
                $gambar         =$this->input->post('gambar');
                $judul          =$this->input->post('judul');
                $berita         =$this->input->post('berita');
                $departemen     =$this->input->post('departemen');
                $penulis        =$this->input->post('penulis');
                $keterangan     =$this->input->post('keterangan');
 
                $this->berita_model->edit2($id_berita,$judul,$berita,$gambar,$departemen, $penulis, $keterangan);
                $this->session->set_flashdata('sukses', 'Berita Berhasil Diedit');
                redirect(base_url('berita/tulis_berita'),'refresh');
         }
                      
         }
        //else{
        //     redirect('berita');
        // }
                 
    }
    
    // menulis berita
 	public function tulis_berita(){
 		$data = array(	'title'	=> 'Tulis Berita',
    					'isi' 	=> 'admin/berita/post_berita' );
    	$this->load->view('admin/layout/wrapper', $data, FALSE);
 	}

    // melihat detail isi berita
    public function view($id_berita){
        $berita			= $this->berita_model->get_berita($id_berita);
        $data 			= array(	'title'		=> $berita->judul,
        							'isi' 		=> 'user/berita/view',
    								'berita'	=> $berita);
        $this->load->view('user/layout/wrapper', $data, FALSE);
    }

    public function list_berita()
    {
        $berita = $this->berita_model->listing();
        $data = array(  'title'     => 'List Berita',
                        'berita'    => $berita,
                        'isi'       => 'admin/berita/list'
                    );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function edit($id_berita)
    {
        $berita = $this->berita_model->get_berita($id_berita);
        $data = array(  'title'     => 'Edit Berita',
                        'berita'    => $berita,
                        'isi'       => 'admin/berita/edit'
                     );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function delete($id_berita)
    {

    }
}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */

