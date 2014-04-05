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
			//$data['posts'] = $this->mvp_model->getPosts();

			$this->load->view('templates/header', $data);
			$this->load->view('homepage', $data);
			$this->load->view('templates/footer', $data);
		}

		// Show a restaurant's page. The restaurant to be shown is specified by the $rest_id (the id of the restaurant).
		// A restaurant's page will consist of:
			// an information section (with details about the restaurant) and 
			// a reviews section (which displays all the reviews for this restaurant).
		function view($rest_id)
		{
			//$this->load->helper('form');
			$data['title'] = "UTMFoodies";
			$data['rest_id'] = $rest_id;
			$data['info'] = $this->mvp_model->get_info($rest_id);
			$data['reviews'] = $this->mvp_model->get_reviews($rest_id);
			$data['average_rating'] = $this->mvp_model->get_average_rating($rest_id); // The average rating of this restaurant.
			$data['num_rec'] = $this->mvp_model->get_num_rec($rest_id); // A message showing the number of people who would recommend this restaurant.

			$this->load->view('templates/header', $data);
			$this->load->view('restaurant_page', $data);
			$this->load->view('templates/footer', $data);
		}

		// Show the add a review page for a restaurant.
		function review($rest_id)
		{
			$this->load->helper('form');
			$data['title'] = "UTMFoodies";
			$data['rest_id'] = $rest_id;
			$data['info'] = $this->mvp_model->get_info($rest_id);

			$this->load->view('templates/header', $data);
			$this->load->view('review_page', $data);
			$this->load->view('templates/footer', $data);
		}

		// Submit a review (i.e., add the review inputted by the user into the db) for a restaurant.
		function submit_review($rest_id) {
			$this->load->helper('form'); 
			$data['title'] = "UTMFoodies";
			$data['rest_id'] = $rest_id;

			$this->mvp_model->submit_review($rest_id);

			$this->load->view('templates/header', $data);
			$this->load->view('review_submit_success_view', $data);
			$this->load->view('templates/footer', $data);
		}
		
	}
