<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('dashboard/index');
        $this->load->view('template/footer');
    }
    public function profile()
    {
        $this->load->view('template/header');
        $this->load->view('dashboard/profile');
        $this->load->view('template/footer');
    }
}