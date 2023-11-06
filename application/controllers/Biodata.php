<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biodata extends CI_Controller
{
  function index()
  {
    $this->load->view('form-biodata');
  }

  public function save()
  {
    // * Menerima name dari field, label untuk errornya, dan validasinya
    // * Validasi dipisahkan oleh | (pipe)
    $this->form_validation->set_rules('nama', 'nama', 'required|min_length[5]|max_length[50]');
    $this->form_validation->set_rules('email', 'email', 'required|valid_emails');
    $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
    $this->form_validation->set_rules('agama', 'agama', 'required');
    $this->form_validation->set_rules('alamat', 'alamat', 'required');

    if ($this->form_validation->run() == true) {
      $data['nama'] = $this->input->post('nama');
      $data['email'] = $this->input->post('email');
      $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
      $data['agama'] = $this->input->post('agama');
      $data['alamat'] = $this->input->post('alamat');
      $this->load->view('biodata', $data);
    } else {
      $this->load->view('form-biodata');
    }
  }
}
