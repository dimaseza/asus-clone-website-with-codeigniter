<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model('product');
            $this->load->library('form_validation');
      }

      public function index()
      {
            $data['title'] = 'Admin';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['product'] = $this->product->getAll();

            $this->load->view('admin/index', $data);
      }

      public function createProduct()
      {
            $this->load->view('admin/create');
      }

      public function saveProduct()
      {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('image', 'Image', 'required');

            if ($this->form_validation->run() == true) {
                  $data['name'] = $this->input->post('name', true);
                  $data['description'] = $this->input->post('description', true);
                  $data['image'] = $this->input->post('image', true);

                  $config['upload_path'] = './assets/images';
                  $config['allowed_types'] = 'gif|jpg|png';
                  $config['max_size'] = 2048;

                  $this->load->library('upload', $config);

                  if (!$this->upload->do_upload('image')) {
                        $error = ['error' => $this->upload->display_errors()];
                        $this->load->view('admin/create', $error);
                  } else {
                        $upload_data = $this->upload->data();

                        $data['image'] = $upload_data['image'];
                  }
                  $this->product->saveData($data);
                  redirect('admin');
            } else {
                  $this->load->view('admin/create');
            }
      }

      public function editProduct($idProduct)
      {
            $data['product'] = $this->product->getById($idProduct);
            $this->load->view('admin/edit', $data);
      }

      public function updateProduct()
      {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('image', 'Image', 'required');

            if ($this->form_validation->run() == true) {
                  $product_id = $this->input->post('product_id');
                  $data['name'] = $this->input->post('name', true);
                  $data['description'] = $this->input->post('description', true);
                  $data['image'] = $this->input->post('image', true);

                  $config['upload_path'] = './assets/images';
                  $config['allowed_types'] = 'gif|jpg|png';
                  $config['max_size'] = 2048;

                  $this->load->library('upload', $config);

                  if (!$this->upload->do_upload('image')) {
                        $error = ['error' => $this->upload->display_errors()];
                        $this->load->view('admin/create', $error);
                  } else {
                        $upload_data = $this->upload->data();

                        $data['image'] = $upload_data['image'];
                  }
                  $this->product->updateData($data, $product_id);
                  redirect('admin');
            } else {
                  $product_id = $this->input->post('product_id');
                  $data['product'] = $this->product->getById($product_id);
                  $this->load->view('admin/create');
            }
      }

      public function deleteProduct($product_id)
      {
            $this->product->deleteData($product_id);
            redirect('admin');
      }
}
