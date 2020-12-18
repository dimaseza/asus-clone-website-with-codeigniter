<?php

class Login extends CI_Controller
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
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() == false) {
                  $this->load->view("login");
            } else {
                  // success
                  $this->loginuser();
            }
      }

      public function loginuser()
      {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->user->getuser($email);

            if ($user) {
                  if ($user['is_active'] == 1) {
                        if (password_verify($password, $user['password'])) {
                              $data = [
                                    'email' => $user['email'],
                                    'role_id' => $user['role_id'],
                                    'image' => $user['image']
                              ];
                              $this->session->set_userdata($data);
                              if ($user['role_id'] == 1) {
                                    redirect('admin');
                              } else {
                                    redirect(base_url(), $data);
                              }
                        } else {
                              $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                              Wrong password! </div>');
                              redirect('login');
                        }
                  } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        This email has not been activated! </div>');
                        redirect('login');
                  }
            } else {
                  $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                  Email is not registered! </div>');
                  redirect('login');
            }
      }

      public function logout()
      {
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');
            $this->session->unset_userdata('image');
            redirect(base_url());
      }
}
