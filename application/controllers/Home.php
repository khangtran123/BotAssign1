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
        $this->load->view('homepage');
    }
    
    private function playerInfo()
    {
        $this->load->model('playerinfo');
        
        //try to call the query in the model to initialize it
         
        $playerInfo = array();
        
        foreach ($query->result() as $row){
            $row = $query->row_array(); 
            $playerInfo[] = $row[];
        }
        //this assigns the array to a variable which will later be called in
        //the view
        $this->data['playerInfo'] = 'playerEC'; 
        
    }
}

    /* End of file Home.php */
    /* Location: application/controllers/Home.php */

