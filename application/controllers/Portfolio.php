<?php

/* 
 * application/controllers/Portfolio.php
 */

class Portfolio extends Application
{
    function __construct()
    {
        parent::__construct();
        $this->load->view('_MasterpageHeader');
        $this->load->view('_MasterpageNavBar');
    }
    
    public function index($players = "unknown")
    {   
        //This condition states that if a link wasn't clicked 
        //or no one is signed in, it just shows the default plaayer portfolio
        //which is the first name in the database "Donald"
        if (is_null($players) || $players == "")
        {
                $players = "Donald";
        }
        $this->data['pagebody'] = 'Player';
        $this->data['Player_dropdown'] = $this->parser->parse('_portfolio_playerDropdown', $this->get_players(), true);
        $this->data['Player_transactions'] = $this->parser->parse('_portfolio_activities', $this->get_activities($players), true);
        $this->data['Player_collections'] = $this->parser->parse('_portfolio_holdings', $this->get_collections($players), true);
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
            $selection['link'] = $this->data['appRoot'] . "/player/" . $player->Player;
            if ($_SERVER['PATH_INFO'] == ("/player/" . $player->Player)) {
                    $selection['selected'] = "selected=\"selected\"";
            } else {
                    $selection['selected'] = "";
            }
            $list[] = $selection;
        }
        
        $players['selections'] = $list;
        //$this->data['debug'] = print_r($list, TRUE);
	return $players;
       
    }
    
    //This function gets the activities or transactions made by that player
    private function get_activities($players)
    {
        $this->load->model('Portfolio_transactions');
        $query = $this->Portfolio_transactions->get_transactions($players);
        $rows = array();
        foreach ($query as $row)
        {
            $rows[] = (array) $row;
        }
        return $rows;
    }
    
    //this function gets the cards that player has
    private function get_collections($players)
    {
        $this->load->model('Portfolio_collections');
        $query = $this->Portfolio_collections->get_collections($players);
        
        $rows = array();
        foreach ($query as $row)
        {
            $rows[] = (array) $row;
        }
        
        return $rows;
    }
}
    /* End of file Portfolio.php */
    /* Location: application/controllers/Portfolio.php */

?>

