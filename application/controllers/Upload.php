<?php

class Upload extends CI_Controller {

    var $API ="";

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->API="http://ensiklopediahkmadat.com/api/index.php";
        /*$this->API="http://localhost/api/index.php";*/
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('upload_form', array('error' => ' ' ));
    }

    public function do_upload()
    {
        $judul = $string = str_replace(' ', '', $this->input->post('judul'));

        $image_path = realpath(APPPATH . '../public/content/');

        $config['upload_path']          = $image_path;
        $config['allowed_types']        = 'jpg';
        $config['max_size']             = 4000;
        $config['file_name']            = "img_".$judul.rand(0,1000).".jpg";

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors().$config['upload_path']);

            $this->load->view('admin/header');
            $this->load->view('admin/newpost',$error);
            $this->load->view('admin/footer');
        }
        else
        {
            $this->insert($this->input->post('judul'), $this->input->post('isi'), $config['file_name']);

            $data = array('upload_data' => $this->upload->data());

            $this->load->view('admin/header');

            $data['content'] = json_decode($this->curl->simple_get($this->API.'/content'));

            $this->load->view('admin/post',$data);
            $this->load->view('admin/footer');
        }
    }

    public function do_uploads(){

        $true = $this->input->post('optradio');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

        $data['judul'] = $judul;
        $data['isi'] = $isi;

        if ($true == 1){

            $this->load->view('admin/header');
            $this->load->view('admin/newpostimage',$data);
            $this->load->view('admin/footer');

        }else{

            $this->insert($this->input->post('judul'), $this->input->post('isi'), "none");

            $this->load->view('admin/header');

            $data['content'] = json_decode($this->curl->simple_get($this->API.'/content'));

            $this->load->view('admin/post',$data);
            $this->load->view('admin/footer');

        }

    }

    public function insert($judul,$isi,$gambar){

        $data = array(
            'judul'        =>  $judul,
            'isi'          =>  $isi,
            'gambar'       =>  $gambar);
        $insert =  $this->curl->simple_post($this->API.'/content', $data, array(CURLOPT_BUFFERSIZE => 10));
        if($insert)
        {
            $this->session->set_flashdata('hasil','Insert Data Berhasil');
        }else
        {
            $this->session->set_flashdata('hasil','Insert Data Gagal');
        }
    }

    function delete($id){
        if(empty($id)){
            $this->load->view('admin/header');

            $data['content'] = json_decode($this->curl->simple_get($this->API.'/content'));

            $this->load->view('admin/post',$data);
            $this->load->view('admin/footer');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/content', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
                $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            $this->load->view('admin/header');

            $data['content'] = json_decode($this->curl->simple_get($this->API.'/content'));

            $this->load->view('admin/post',$data);
            $this->load->view('admin/footer');
        }
    }
}
?>