<?php

/* 
 * application/controllers/Home.php
 */

class Home extends Ci_controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
		$this->load->view('MasterpageHeader');
		$this->load->view('MasterpageNavBar');
		$this->load->view('Homepage');
    }
}

    /* End of file Home.php */
    /* Location: application/controllers/Home.php */
?>
