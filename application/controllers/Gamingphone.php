<?php

class Gamingphone extends CI_Controller
{
      public function __construct()
      {
            parent::__construct();
            $this->load->model('product');
      }

      public function index()
      {
            $data['product'] = $this->product->getAll();
            $this->load->view("gaming_phone", $data);
      }
}