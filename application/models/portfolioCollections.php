<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of portfolioCollections
 *
 * @author Emilio
 */
class portfolioCollections extends MY_Model
{
    
    function __construct() {
        parent::__construct('collections', 'piece');
    }
    
    public function getCollections($player_name, $piece){
        $query = $this->db->query('SELECT piece FROM collections'
                . ' WHERE player = "' . $player_name . '" AND'
                . ' piece = "' . $piece . '"');
      
        return $query->num_rows();  
    }
}
