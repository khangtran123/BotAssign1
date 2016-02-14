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
		$this->load->view('_MasterpageHeader');
		$this->load->view('_MasterpageNavBar');
		$this->load->view('Portfolio');
    }
}

    /* End of file Portfolio.php */
    /* Location: application/controllers/Portfolio.php */
?>
