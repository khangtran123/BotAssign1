<?php

/* 
 * application/controllers/Home.php
 */

class Home extends Application
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('homepage');
    }
}

    /* End of file Home.php */
    /* Location: application/controllers/Home.php */
?>
