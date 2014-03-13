<?php
	class Admin extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('blog_model');
		}

		function index() {
			$this->load->helper('form');
			$data['title'] = "Times12px";
			$data['posts'] = $this->blog_model->getPosts();
			$this->load->view('templates/header', $data);
			$this->load->view('homepage', $data);
			$this->load->view('templates/footer', $data);
		}

		function create() {
			$this->load->helper('form');
			$data['title'] = "Times12px";
			$this->blog_model->create_post();
			$this->load->view('templates/header', $data);
			$this->load->view('admin_success_view');
			$this->load->view('templates/footer', $data);
		}
			
		function update($id) { 
  			$this->load->helper('form'); 
  			$data['title'] = "Times12px"; 
  			$data['post'] = $this->blog_model->getPost($id);
  			$this->load->view('templates/header', $data);
  			$this->load->view('admin_update', $data); 
  			$this->load->view('templates/footer', $data);
  			
		}

		function update_post($id) {
			$this->load->helper('form'); 
			$data['title'] = "Times12px"; 
			$this->blog_model->update_post($id);
			$this->load->view('templates/header', $data);
			$this->load->view('admin_update_success_view', $data);
			$this->load->view('templates/footer', $data);
		}

		function delete($id) { 
  			$this->load->helper('form'); 
 			$data['title'] = "Times12px"; 
  			$this->blog_model->delete_post($id);
  			$this->load->view('templates/header', $data);
  			$this->load->view('admin_post_deleted_view'); 
  			$this->load->view('templates/footer', $data);
		}
	}
	
