<?php
	class Mvp_model extends CI_MODEL {

		// Get all of the information regarding the restaurant specified by $rest_id (i.e., the record where rest_id == $rest_id).
		// $rest_id is the id of the restaurant we're retrieving information for.
		function get_info($rest_id) { 
  			$query = $this->db->get_where('restaurant_info', array('id' => $rest_id)); 
  			
  			return $query->result_array();
		}

		// Insert the review inputted by the user into the database.
		function submit_review($rest_id) { 
 			$data['rest_id'] = $this->input->post('rest_id'); 
 			$data['name'] = $this->input->post('name'); 
 			$data['email'] = $this->input->post('email');
 			$data['review'] = $this->input->post('review'); 
 			$data['rating'] = $this->input->post('rating'); 
 			$data['recommend'] = $this->input->post('recommend');
 			$data['status'] = $this->input->post('status');

 			return $this->db->insert('reviews', $data);
		}

		// Get all of the approved reviews for the restaurant specified by $rest_id.
			// Reviews are initially inserted into the database with a value of 0 as its status 
			// to indicate that it is waiting to be approved/rejected by the site admin.
			// Approved reviews have a status of 1.
		function get_reviews($rest_id) {
  			$query = $this->db->get_where('reviews', array('rest_id' => $rest_id, 'status' => 1)); 
  			
  			return $query->result_array();
		}

		// Get the average rating for the restaurant specified by $rest_id.
			// average rating = sum of the ratings / total number of ratings.
		function get_average_rating($rest_id) {
  			//$query = $this->db->get_where('reviews', array('rest_id' => $rest_id, 'status' => 1)); 
			$this->db->select_avg('rating');
			$query = $this->db->get_where('reviews', array('rest_id' => $rest_id, 'status' => 1));
			
			return $query->result_array();
		}

		// Get the number of people who would recommend the restaurant specified by $rest_id.
		function get_num_rec($rest_id) {
			$this->db->where('rest_id', $rest_id);
			$this->db->where('recommend', 'Yes');
			$this->db->from('reviews');
			$num_rec = $this->db->count_all_results(); // The number of people who would recommend this restaurant.

			$this->db->where('rest_id', $rest_id);
			$this->db->from('reviews');
			$num_reviewed = $this->db->count_all_results(); // The number of people who wrote a review for this restaurant.

			return $num_rec . ' out of ' . $num_reviewed . ' recommend this restaurant';
		}

/*
		function getPosts() {
			$query = $this->db->get('data');
			return $query->result_array();
		}

		function create_post() {
			$data['title'] = $this->input->post('title');
			$data['size'] = $this->input->post('size');
			$data['type'] = $this->input->post('type');
			$data['viewfont'] = $this->input->post('viewfont');
			return $this->db->insert('data', $data);
		}

		function getPost($id) { 
  			$query = $this->db->get_where('data', array('id' => $id)); 
  			return $query->result_array(); 
		}

		function update_post($id) { 
 			$data['title'] = $this->input->post('title'); 
 			$data['size'] = $this->input->post('size');
 			$data['type'] = $this->input->post('type'); 
 			$data['viewfont'] = $this->input->post('viewfont'); 
  			$this->db->where('id', $id); 
  			$this->db->update('data', $data); 
		}

		function delete_post($id)
    	{
      		$this->db->delete('data', array('id' => $id));
    	}

		function getType($type) { 
  			$query = $this->db->get_where('data', array('type' => $type)); 
  			return $query->result_array(); 
  		}
  */

}