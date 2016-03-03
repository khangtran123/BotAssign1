<?php

/* 
 * application/controllers/Portfolio.php
 */

class Portfolio extends Application
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index($players = "unknown")
    {   
        //have to make condition that states if a user sesison is logged in
        //in or not 
        if($this->session->userdata('username')){
            $players = $this->session->userdata('username');
        } else{
            //display default player which is Donald
        }
        
        //This condition states that if a link wasn't clicked 
        //or no one is signed in, it just shows the default player portfolio
        //which is the first name in the database "Donald"
        if (is_null($players) || $players == "")
        {
            $players = "Donald";
        }
        $this->data['pagebody'] = 'Player';
        $this->data['Player_dropdown'] = $this->parser->parse('_portfolio_playerDropdown', $this->get_players(), true);
        $this->get_activities($players);
        $this->get_cards($players);
        $this->data['username'] = $players;
        
        $this->render(); 
    }
    
    //This function gets the players in the db and displays it into a dropdown list
    function get_players()
    {
        $this->load->model('players');
        //calls on the players model and refers to the all function
        //all is assigned to players
        $allPlayers = $this->players->all(); 
        $list = array(); 
            
        foreach($allPlayers as $player)
        {
            $selection['player'] = $player->Player;
            $selection['link'] = "/portfolio/" . $player->Player;
            $list[] = $selection;
        }
        
        $players['selections'] = $list;
	return $players;
    }
    
    //This function gets the activities or transactions made by that player
    private function get_activities($players)
    {
        $this->load->model('Portfolio_transactions');
        $result = $this->Portfolio_transactions->get_transactions($players);
        $list = array();
        
        foreach ($result as $row)
        {   
            $list[] = (array) $row;
        }
        
        $data['transactions'] = $list;	
        $this->data['transactions'] = $this->parser->parse('_portfolio_activities', $data, true);
    }
    
    //this function gets the cards that player has
    private function get_cards($players)
    {
        $this->load->model('Portfolio_collections');
        
        $this->data['11ah'] = $this->Portfolio_collections->get_collections($players, "11a-0");
        $this->data['11ab'] = $this->Portfolio_collections->get_collections($players, "11a-1");
        $this->data['11al'] = $this->Portfolio_collections->get_collections($players, "11a-2");
        
        $this->data['11bh'] = $this->Portfolio_collections->get_collections($players, "11b-0");
        $this->data['11bb'] = $this->Portfolio_collections->get_collections($players, "11b-1");
        $this->data['11bl'] = $this->Portfolio_collections->get_collections($players, "11b-2");
        
        $this->data['11ch'] = $this->Portfolio_collections->get_collections($players, "11c-0");
        $this->data['11cb'] = $this->Portfolio_collections->get_collections($players, "11c-1");
        $this->data['11cl'] = $this->Portfolio_collections->get_collections($players, "11c-2");

        $this->data['13ch'] = $this->Portfolio_collections->get_collections($players, "11b-0");
        $this->data['13cb'] = $this->Portfolio_collections->get_collections($players, "11b-1");
        $this->data['13cl'] = $this->Portfolio_collections->get_collections($players, "11b-2");
        
        $this->data['13dh'] = $this->Portfolio_collections->get_collections($players, "13c-0");
        $this->data['13db'] = $this->Portfolio_collections->get_collections($players, "13c-1");
        $this->data['13dl'] = $this->Portfolio_collections->get_collections($players, "13c-2");

        $this->data['26hh'] = $this->Portfolio_collections->get_collections($players, "26h-0");
        $this->data['26hb'] = $this->Portfolio_collections->get_collections($players, "26h-1");
        $this->data['26hl'] = $this->Portfolio_collections->get_collections($players, "26h-2");
    }
}
    /* End of file Portfolio.php */
    /* Location: application/controllers/Portfolio.php */

?>

