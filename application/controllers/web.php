<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class web extends CI_Controller{
    function _construct(){
        parent::_construct();
        $this->load->helper('url');
    }

    public function index (){
        $data ['judul'] = "Halaman Depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);

    }
    public function about()
 {
 $data['judul'] = "Halaman About";
 $this->load->view('v_header', $data);
 $this->load->view('v_about', $data);
 $this->load->view('v_footer', $data);
 }
    public function BukuTamu()
 {
 $data['judul'] = "Halaman Buku Tamu";
 $this->load->view('v_header', $data);
 $this->load->view('v_BukuTamu', $data);
 $this->load->view('v_footer', $data);
 }
    public function cetak()
 {
    $data=[
 'nama'=>$this->input->post('nama'),
 'email'=>$this->input->post('email'),
 'komentar'=>$this->input->post('komentar')];
    $this->load->view('v_header', $data);
    $this->load->view('v_RegistrasiTamu', $data);
    $this->load->view('v_footer', $data);
 }
}