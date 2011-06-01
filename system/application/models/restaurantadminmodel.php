<?php

class RestaurantAdminModel extends Model {

    function RestaurantAdminModel()
    {
        // Call the Model constructor
        parent::Model();
    }
    
	function deleteEntries($table, $ownerCol) {
		$this->db->where($ownerCol, $this->session->userdata('userID'));
		$query = $this->db->get($table);
		if ($query->num_rows() > 0) {
			$this->db->delete($table, array($ownerCol => $this->session->userdata('userID')));
		}
	}
	
}
?>