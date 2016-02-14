<?php

/* 
 * application/controllers/Portfolio.php
 */

class Portfolio extends Ci_controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index($player = "unknown")
    {
		$this->load->view('MasterpageHeader');
		$this->load->view('MasterpageNavBar');
		$this->load->view('Portfolio');
    }
}

    /* End of file Portfolio.php */
    /* Location: application/controllers/Portfolio.php */
?>
