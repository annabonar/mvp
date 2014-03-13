<?php
	class Blog extends CI_Controller {
		public function __construct()
		{
			parent::__construct(); 
			$this->load->model('blog_model');
		}
		
		function index()
		{
			$data['title'] = "Times12px";
			$data['posts'] = $this->blog_model->getPosts();
			$this->load->view('templates/header', $data);
			$this->load->view('homepage', $data);
			$this->load->view('templates/footer', $data);

		}

		function type($type) {
			$this->load->helper('form');
			$data['title'] = "Times12px";
			$data['posts'] = $this->blog_model->getType($type);
			$this->load->view('templates/header', $data);
			$this->load->view('homepage', $data);
			$this->load->view('templates/footer', $data);
		}

	}
