<?php
	class Mvp extends CI_Controller {
		public function __construct()
		{
			parent::__construct(); 
			$this->load->model('mvp_model'); // Load the model.
		}
		
		function index()
		{
			$data['title'] = "UTMFoodies";
			$data['posts'] = $this->mvp_model->getPosts();
			$this->load->view('templates/header', $data);
			$this->load->view('homepage', $data);
			$this->load->view('templates/footer', $data);
		}

		// Add a review for a restaurant.
		function review()
		{
			$this->load->helper('form');
			$data['title'] = "UTMFoodies";
			//$data['posts'] = $this->mvp_model->getPosts();
			$this->load->view('templates/header', $data);
			$this->load->view('review_page', $data);
			$this->load->view('templates/footer', $data);
		}

		// View a restaurant's page.
		// A restaurant's page will consist of:
			// an information section (with details about the restaurant) and 
			// a reviews section (which displays all the reviews for this restaurant).
		function view($rest_id)
		{
			//$this->load->helper('form');
			$data['title'] = "UTMFoodies";
			$data['info'] = $this->mvp_model->getInfo($rest_id);
			$this->load->view('templates/header', $data);
			$this->load->view('restaurant_page', $data);
			$this->load->view('templates/footer', $data);
		}		

		/*
		function type($type) {
			$this->load->helper('form');
			$data['title'] = "Times12px";
			$data['posts'] = $this->blog_model->getType($type);
			$this->load->view('templates/header', $data);
			$this->load->view('homepage', $data);
			$this->load->view('templates/footer', $data);
		}
		*/
		
	}
