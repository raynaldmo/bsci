<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Skeleton  extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->helper('url');
  }

  public function index() {
    $this->load->view('skeleton/header');
    $this->load->view('skeleton/home');
    $this->load->view('skeleton/footer');
  }
}