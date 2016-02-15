<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Portfolio_transactions
 *
 * @author Emilio
 */
class Portfolio_transactions extends MY_Model
{
    
    function __construct() {
        parent::__construct();
        $this->tablename = 'transactions';
        $this->keyfield = 'Player'; 
    }
    
    public function get_transactions($player_name){
        $query = $this->db->query('SELECT DateTime, Series, Trans '
                . 'FROM `transactions` WHERE player = "' . $player_name 
                . '" ORDER BY DateTime LIMIT 3');
      
        return $query->result();  
    }
}
