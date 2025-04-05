<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // No need to load database here as it's already autoloaded
    }

    public function get_todos() {
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get('todos');
        return $query->result();
    }

    public function get_todo($id) {
        $query = $this->db->get_where('todos', array('id' => $id));
        return $query->row();
    }

    public function add_todo($data) {
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['status'] = 0; // 0 = pending, 1 = completed
        return $this->db->insert('todos', $data);
    }

    public function update_todo($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('todos', $data);
    }

    public function delete_todo($id) {
        $this->db->where('id', $id);
        return $this->db->delete('todos');
    }

    public function toggle_status($id) {
        $todo = $this->get_todo($id);
        $new_status = ($todo->status == 0) ? 1 : 0;
        
        $this->db->where('id', $id);
        return $this->db->update('todos', array('status' => $new_status));
    }
} 
