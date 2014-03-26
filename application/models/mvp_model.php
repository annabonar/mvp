<?php
	class Mvp_model extends CI_MODEL {

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

		// $rest_id is the id of the restaurant we're retrieving information for.
		function getInfo($rest_id) { 
  			$query = $this->db->get_where('restaurant_info', array('id' => $rest_id)); 
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

		function submit_review($rest_id) { 
 			$data['name'] = $this->input->post('name'); 
 			$data['email'] = $this->input->post('email');
 			$data['review'] = $this->input->post('review'); 
 			$data['rating'] = $this->input->post('rating'); 
 			$data['recommend'] = $this->input->post('recommend'); 
  			$this->db->where('rest_id', $rest_id); 
  			$this->db->update('reviews', $data); 
		}

		function delete_post($id)
    	{
      		$this->db->delete('data', array('id' => $id));
    	}

		function getType($type) { 
  			$query = $this->db->get_where('data', array('type' => $type)); 
  			return $query->result_array(); 
  		}

}