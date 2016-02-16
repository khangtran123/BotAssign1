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
        $this->get_collections($players);
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
    private function get_collections($players)
    {
        $this->load->model('Portfolio_collections');
        $result = $this->Portfolio_collections->get_collections($players);
        
        $list = array();
        foreach ($result as $row)
        {
            $list[] = (array) $row;
        }
        
        //$data['collections'] = $list;
        //$this->parser->parse('_portfolio_holdings', $this->get_collections($players), true);
        
        $this ->load->library('table');
        $parms = array(
            'table_open' => '<table>',
            'cell_start' => '<td>',
            'cell_atl_start' => '<td>'
        );
        $this->table->set_template($parms);

        // generate the table
        $rows = $this->table->make_columns($cells, 3);
        $this->data['collections'] = $this->table->generate($rows);
    }
}
    /* End of file Portfolio.php */
    /* Location: application/controllers/Portfolio.php */

?>

