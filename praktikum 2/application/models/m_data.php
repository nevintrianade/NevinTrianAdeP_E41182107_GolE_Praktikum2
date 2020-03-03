<?php 
 
class M_data extends CI_Model{ //class turunan CI_Model
	function ambil_data(){ //fungsi bernama ambil_data
		return $this->db->get('user');  //memanggil database user
    }
    
}