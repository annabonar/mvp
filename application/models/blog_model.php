<?php
	class Blog_model extends CI_MODEL {

		function getPosts() {
			$query = $this->db->get('DATA');
			return $query->result_array();
		}

		function create_post() {
			$data['title'] = $this->input->post('title');
			$data['size'] = $this->input->post('size');
			$data['type'] = $this->input->post('type');
			$data['viewfont'] = $this->input->post('viewfont');
			return $this->db->insert('DATA', $data);
		}

		function getPost($id) { 
  			$query = $this->db->get_where('DATA', array('id' => $id)); 
  			return $query->result_array(); 
		}

		function update_post($id) { 
 			$data['title'] = $this->input->post('title'); 
 			$data['size'] = $this->input->post('size');
 			$data['type'] = $this->input->post('type'); 
 			$data['viewfont'] = $this->input->post('viewfont'); 
  			$this->db->where('id', $id); 
  			$this->db->update('DATA', $data); 
		}

		function delete_post($id)
    	{
      		$this->db->delete('DATA', array('id' => $id));
    	}

		function getType($type) { 
  			$query = $this->db->get_where('DATA', array('type' => $type)); 
  			return $query->result_array(); 
  		}

}