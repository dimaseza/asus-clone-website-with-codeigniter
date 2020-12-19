<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Model
{
      public function __construct()
      {
            parent::__construct();
      }

      public function getAll()
      {
            return $this->db->get('product')->result();
      }

      public function saveData($data)
      {
            return $this->db->insert('product', $data);
      }

      public function getById($id)
      {
            return $this->db->get_where('product', ['product_id' => $id])->row();
      }

      public function updateData($data, $id)
      {
            return $this->db->update('product', $data, ['product_id' => $id]);
      }

      public function deleteData($id)
      {
            return $this->db->delete('product', ['product_id' => $id]);
      }
}
