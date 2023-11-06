<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotel extends CI_Controller
{
  public function index()
  {
    $this->load->view('hotel');
  }

  public function calculate()
  {
    $this->form_validation->set_rules('nama', 'nama', 'required|alpha|min_length[5]');
    $this->form_validation->set_rules('type_kamar', 'type_kamar', 'required|in_list[a,b,c]');
    $this->form_validation->set_rules('lama_inap', 'lama_inap', 'required|is_natural');

    if ($this->form_validation->run() == false) return $this->load->view('hotel');

    $nama = $this->input->post('nama');
    $type_kamar = $this->input->post('type_kamar');
    $lama_inap = $this->input->post('lama_inap');
    $not_found = '';  // Pastikan variabel ini selalu didefinisikan

    switch ($type_kamar) {
        // ! case 'A' || 'a': ini goblok ini, udah kena otaknya
        // ! mana bisa gitu, yang ada a selalu dipilih
      case 'A';
      case 'a';
        $harga_kamar = 1000000;
        $subtotal = $harga_kamar * $lama_inap;
        $diskon = $subtotal * 15 / 100;
        $total = $subtotal - $diskon;
        $ppn = $total * 0.11;
        $total_dibayar = $total + $ppn;
        break;
      case 'B';
      case 'b';
        if ($lama_inap < 2) {
          $harga_kamar = 650000;
          $subtotal = $harga_kamar * $lama_inap;
          $diskon = 0;
          $total = $subtotal - $diskon;
          $ppn = $total * 0.11;
          $total_dibayar = $total + $ppn;
        } else { // ! harus else intinya! gabisa guard clauses
          $harga_kamar = 650000;
          $subtotal = $harga_kamar * $lama_inap;
          $diskon = $subtotal * 10 / 100;
          $total = $subtotal - $diskon;
          $ppn = $total * 0.11;
          $total_dibayar = $total + $ppn;
        }
        break;
      case 'C';
      case 'c';
        $harga_kamar = 350000;
        $subtotal = $harga_kamar * $lama_inap;
        $diskon = 0;
        $total = $subtotal - $diskon;
        $ppn = $total * 0.11;
        $total_dibayar = $total + $ppn;
        break;

      default:
        $not_found = 'Kamar yang dipilih tidak tersedia';
        break;
    }

    $data = array(
      'nama' => $nama,
      'type_kamar' => $type_kamar,
      'lama_inap' => $lama_inap,
      'harga_kamar' => $harga_kamar,
      'subtotal' => $subtotal,
      'diskon' => $diskon,
      'total' => $total,
      'ppn' => $ppn,
      'total_dibayar' => $total_dibayar,
      'not_found' => $not_found,
    );

    $this->load->view('hotel', $data);
  }
}
