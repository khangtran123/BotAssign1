<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2015, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;                  // identifier for our content

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */

    function __construct() {
        parent::__construct();
        $this->data = array();
        //$this->data['title'] = '?';
        $this->errors = array();
        $this->data['appRoot'] = (strlen(dirname($_SERVER['SCRIPT_NAME'])) === 1 ? "" : dirname($_SERVER['SCRIPT_NAME']));
		$this-> userLogin();
		$this-> reload();
	}
	
		function userLogin(){
		$username = $this->input->get_post('username');
		
		if(!empty($username)){
			$this->load->model('PlayerLogin');
			
			if($username === $this->PlayerLogin->get(array('player'=>$username))['Player'])
			{
				$this->session->set_userdata(array('username'=>$username));
			}
		}
	}
	
	function reload(){
		if($this->session->userdata('username'))
		{
			$this->data['user_welcome'] = $this->session->userdata('username');
		}
		else
		{
			$this->data['user_welcome'] = '';
			
		}
	}
	
    /**
     * Render this page
     */
    function render() { 
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        
        // finally, build the browser page!
        $this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }

}
