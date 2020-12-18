<?php

class Register extends CI_Controller
{
      public function __construct()
      {
            parent::__construct();
            $this->load->model('user');
            $this->load->library('form_validation');
            $this->load->helper(['form', 'url']);
      }

      public function index()
      {
            $this->load->view("register");
      }

      public function registeruser()
      {
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim');
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
                  'matches' => 'Password doesnt match!',
                  'min_length' => 'Password too short!'
            ]);
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

            if ($this->form_validation->run() == false) {
                  $this->load->view("register");
            } else {
                  $data = [
                        'name' => htmlspecialchars($this->input->post('name', true)),
                        'email' => htmlspecialchars($this->input->post('email', true)),
                        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                        'image' => 'default.jpg',
                        'role_id' => 2,
                        'is_active' => 1,
                        'date_created' => time()
                  ];

                  $this->user->register($data);
                  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                  Congratulation! your account has been created. Please Login </div>');
                  redirect('login');
            }
      }
}
