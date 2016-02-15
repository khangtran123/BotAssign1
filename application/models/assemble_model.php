<?php

class assemble_model extends MY_Model {
    
    function __construct() {
        parent::__construct();
        $this->tablename = 'collections';
        $this->keyfield = 'Piece'; 
    }
    
     /*
      *
      * Return the player's name, the piece they have and the token for the piece
      * 
      */
    
    public function playerCollections(){
        $query = $this->db->query('SELECT *'
                . 'FROM collections ORDER BY player');
      
        return $query->result();  
    }
	
	    function allCards(){
        $query = $this->db->query("SELECT `Piece` FROM `collections`");
      
        return $query->result();  
    }

}
