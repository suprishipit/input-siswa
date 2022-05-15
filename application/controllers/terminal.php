<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class terminal extends CI_Controller
{
    public function index()
    {
        $this->load->view('input-siswa');
    }

    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggallahir' => $this->input->post('tanggallahir'),
            'tempatlahir' => $this->input->post('tempatlahir'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama')

        ];
        $this-> load->view('hasil-data',$data);
    }
}

?>