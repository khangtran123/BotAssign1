<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Portfolio_collections
 *
 * @author Emilio
 */
class Portfolio_collections extends MY_Model
{
    
    function __construct() {
        parent::__construct();
        $this->tablename = 'collections';
        $this->keyfield = 'Player'; 
    }
    
    public function get_collections($player_name){
        $query = $this->db->query('SELECT piece FROM `collections` '
                . 'WHERE player = "' . $player_name . '" ORDER BY piece');
      
        return $query->result();  
    }
}
