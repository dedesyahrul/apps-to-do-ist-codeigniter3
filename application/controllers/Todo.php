<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('todo_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Tugas';
        $data['todos'] = $this->todo_model->get_todos();
        $this->load->view('templates/header', $data);
        $this->load->view('todo/index', $data);
        $this->load->view('templates/footer');
    }

    public function add() {
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('description', 'Deskripsi', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Tambah Tugas';
            $this->load->view('templates/header', $data);
            $this->load->view('todo/add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description')
            );
            
            $this->todo_model->add_todo($data);
            $this->session->set_flashdata('success', 'Tugas berhasil ditambahkan');
            redirect('todo');
        }
    }

    public function edit($id) {
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('description', 'Deskripsi', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Edit Tugas';
            $data['todo'] = $this->todo_model->get_todo($id);
            
            if (empty($data['todo'])) {
                show_404();
            }
            
            $this->load->view('templates/header', $data);
            $this->load->view('todo/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status') ? 1 : 0
            );
            
            $this->todo_model->update_todo($id, $data);
            $this->session->set_flashdata('success', 'Tugas berhasil diperbarui');
            redirect('todo');
        }
    }

    public function delete($id) {
        $todo = $this->todo_model->get_todo($id);
        
        if (empty($todo)) {
            show_404();
        }
        
        $this->todo_model->delete_todo($id);
        $this->session->set_flashdata('success', 'Tugas berhasil dihapus');
        redirect('todo');
    }

    public function toggle_status($id) {
        $todo = $this->todo_model->get_todo($id);
        
        if (empty($todo)) {
            show_404();
        }
        
        $this->todo_model->toggle_status($id);
        redirect('todo');
    }
	
}
