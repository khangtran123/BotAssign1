<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PlayerInfo
 *
 * @author Khang
 */
class PlayerLogin extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
	public function get($whom){
		$data = $this->db->get_where('players', $whom)->result_array();
		
		if(empty($data)){return NULL;}
		
		return $data[0];
	}
}
