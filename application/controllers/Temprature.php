<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Temprature extends CI_Controller
{
  public function index()
  {
    $this->load->view('temprature-converter');
  }

  public function converter()
  {
    $this->form_validation->set_rules('temprature', 'temprature', 'required|numeric');
    $this->form_validation->set_rules('converter', 'converter', 'required|in_list[fahrenheit,reamur,kelvin]');

    if ($this->form_validation->run() == false) return $this->load->view('temprature-converter');

    $temprature = $this->input->post('temprature');
    $converter = $this->input->post('converter');

    switch ($converter) {
      case 'fahrenheit':
        $result = $temprature * 9 / 5 + 32;
        break;
      case 'reamur':
        $result = $temprature * 4 / 5;
        break;
      case 'kelvin':
        $result = $temprature + 273.15;
        break;
      default:
        $result = $temprature;  // Jika 'celcius' dipilih, tidak ada konversi yang perlu dilakukan
    }

    $data['result'] = $result;
    $this->load->view('temprature-converter', $data);
  }
}
