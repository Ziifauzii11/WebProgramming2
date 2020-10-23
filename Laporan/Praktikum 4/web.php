<?php
defined('BASEPATH') or exit ('no direct script acces allowed');

class web extends CI_Controller
{

  function _construct(){
    parent::_construct('url');
  }
  
  public function index(){
    $data['judul'] = "Halaman Depan";
    $this->load->view('V_header',$data);
    $this->load->view('V_index',$data);
    $this->load->view('V_footer',$data);
  }
}