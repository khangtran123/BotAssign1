<?php

/* 
 * application/controllers/Assemblepage.php
 */

class Assemble extends Application
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
		$this->data['pagebody'] = 'assemblepage';
		$this->load->view('_MasterpageHeader');
		$this->load->view('_MasterpageNavBar');
		$this->playerCards();
                $this->selectHeads();
                $this->selectBody();
                $this->selectLegs();

    }

    private function playerCards() {
        $this->load->model('assemble_model');
        //try to call the query in the model to initialize it
        $query = $this->assemble_model->playerCollections();
        $playerCards = array();
        foreach ($query as $row) {
            $playerCards[] = (array) $row;
        }
        
        $table = array();
        foreach ($playerCards as $index => $row) {
            $new = $row;
            switch($index % 2 == 0){
                case TRUE:
                    $new['tableClass'] = "collection1";
                    break;
                case FALSE:
                    $new['tableClass'] = "collection2";
                    break;
            }
            $table[] = $new;
        }
        
        $players['collectionTable'] = $table;

        $this->data['playerCards'] = $this->parser->parse('_collectionTable', $players, true);
    }
    	private function selectHeads() {
                $this->load->model('assemble_model');
		$query = $this->assemble_model->allHeads();
		
		$selectHeads = array();
		
		foreach ($query as $row) {
			$allHeads[] = (array) $row;	
		}
		
		$cards['AllPieces'] = $allHeads;
		
		$this->data['selectHeads'] = $this->parser->parse('_allPieces', $cards, true);
		
	}
            	private function selectBody() {
                $this->load->model('assemble_model');
		$query = $this->assemble_model->allBody();
		
		$selectBody = array();
		
		foreach ($query as $row) {
			$allBody[] = (array) $row;	
		}
		
		$cards['AllPieces'] = $allBody;
		
		$this->data['selectBody'] = $this->parser->parse('_allPieces', $cards, true);
		
	}
            	private function selectLegs() {
                $this->load->model('assemble_model');
		$query = $this->assemble_model->allLegs();
		
		$selectLegs = array();
		
		foreach ($query as $row) {
			$allLegs[] = (array) $row;	
		}
		
		$cards['AllPieces'] = $allLegs;
		
		$this->data['selectLegs'] = $this->parser->parse('_allPieces', $cards, true);
                $this->parser->parse('assemblepage', $this->data);
		
	}
}
    /* End of file Assemble_page.php */
    /* Location: application/controllers/Assemble_page.php */
?>
