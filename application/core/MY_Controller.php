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
        $this->errors = array();
        $this->data['appRoot'] = (strlen(dirname($_SERVER['SCRIPT_NAME'])) === 1 ? "" : dirname($_SERVER['SCRIPT_NAME']));
        $this->userLogin();
        $this->reload();
	}
            //function userLogin is configured in core controller becuase you want it
            //to load everytime the _template.php is loaded for all pages
           function userLogin(){
                //loads the model PlayerLogin which uses the function to grab the player query
                $this->load->model('PlayerLogin');
                
                //try to call the query in the model to initialize it
                $query = $this->PlayerLogin->userLogin();
                $player = array();

                foreach ($query as $row) {
                    $player[] = (array) $row;
                }
                
                //$this->data['debug'] = print_r($player, TRUE);
               
                //lines 35-36 gets the username and action from the form
                $username = $this->input->get_post('username');
                $whatToDo = $this->input->get_post('do');
                
                //this condition checks to see if the user is logged in. 
                if($this->session->userdata('username')){
                    $this->data['welcome_msg'] = 'Welcome ' .$this->session->userdata('username'); 
                    $this->data['login'] = 'Logout'; //if logged in, the button value would be changed to logout
                    $this->data['loginform'] = 'none'; //if signed in, the prompt for username is not displayed
                    $this->data['loginDo'] = 'logout'; //button value would be the case of logout
                } else{
                    $this->data['welcome_msg'] = 'Please Enter a Username'; 
                    $this->data['login'] = 'Login'; //if not logged in, the button value would be changed to login
                    $this->data['loginform'] = 'inline'; //if not signed in, the prompt for username is displayed
                    $this->data['loginDo'] = 'login'; //button value would be the case of logging in
                } 
                
                //now it's time to create the session
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
