<?php

class assembleModel extends MY_Model {
    
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
	
    function allHeads(){
        $query = $this->db->query("SELECT `Piece` FROM `collections` WHERE `Piece` LIKE '%0'");
        return $query->result();  
    }
    function allBody(){
        $query = $this->db->query("SELECT `Piece` FROM `collections` WHERE `Piece` LIKE '%1'");
        return $query->result();  
    }
    function allLegs(){
        $query = $this->db->query("SELECT `Piece` FROM `collections` WHERE `Piece` LIKE '%2'");
        return $query->result();  
    }

}
