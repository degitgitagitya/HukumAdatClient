<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: degit
 * Date: 11/12/2018
 * Time: 10:31 AM
 */

class Adminhome extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://ensiklopediahkmadat.com/api/index.php";
        /*$this->API="http://localhost/api/index.php";*/
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function home(){

        $this->load->view('admin/header');
        $this->load->view('admin/home');
        $this->load->view('admin/footer');
    }

}