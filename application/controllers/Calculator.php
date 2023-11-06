<?php
// * Intinya perlu lah biar ga di hack
defined('BASEPATH') or exit('No direct script access allowed');

class Calculator extends CI_Controller
{

  public function index()
  {
    $this->load->view('calculator');
  }

  public function calculate()
  {
    $this->form_validation->set_rules('number1', 'number1', 'required|numeric');
    $this->form_validation->set_rules('number2', 'number2', 'required|numeric');
    $this->form_validation->set_rules('operation', 'operation', 'required|in_list[+,-,*,/]');

    if ($this->form_validation->run() == false) return $this->load->view('calculator');

    $number1 = $this->input->post('number1');
    $number2 = $this->input->post('number2');
    $operation = $this->input->post('operation');

    switch ($operation) {
      case '+':
        $result = $number1 + $number2;
        break;
      case '-':
        $result = $number1 - $number2;
        break;
      case '*':
        $result = $number1 * $number2;
        break;
      case '/':
        $result = $number1 / $number2;
        break;

      default:
        $result = '';
        break;
    }

    $data['result'] = $result;
    $this->load->view('calculator', $data);
  }
}
