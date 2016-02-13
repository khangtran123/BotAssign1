<?php

/* 
 * application/controllers/Home.php
 */


class Home extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
		$this->load->view('_MasterpageHeader');
		$this->load->view('_MasterpageNavBar');
		$this->load->view('Homepage');
    }
    
    
    private function playerInfo()
    {
        $this->load->model('PlayerInfo');
        
        //try to call the query in the model to initialize it
        $query = $this->PlayerInfo->playerEC();  
        $playerInfo = array();
        
        foreach ($query as $row){
            $playerInfo[] = (array) $row;
        }
        //this assigns the array to a variable which will later be called in
        //the view
        $this->data['playerInfo'] = $playerInfo;
        $this->parser->parse('Homepage', $this->data);
        
    } 
    
}

    /* End of file Home.php */
    /* Location: application/controllers/Home.php */

