<?php

/* 
 * application/controllers/Assemblepage.php
 */

class assemble extends Application
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {                   
        $this->data['pageBody'] = 'assemblePage';
        $this->playerCards();
        $this->selectHeads();
        $this->selectBody();
        $this->selectLegs();
    }

    private function playerCards() {
        $this->load->model('assembleModel');
        //try to call the query in the model to initialize it
        $query = $this->assembleModel->playerCollections();
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
        $this->load->model('assembleModel');
        $query = $this->assembleModel->allHeads();

        $selectHeads = array();

        foreach ($query as $row) {
            $allHeads[] = (array) $row;	
        }

        $cards['allPieces'] = $allHeads;

        $this->data['selectHeads'] = $this->parser->parse('_allPieces', $cards, true);

    }
    
    private function selectBody() {
        $this->load->model('assembleModel');
        $query = $this->assembleModel->allBody();

        $selectBody = array();

        foreach ($query as $row) {
            $allBody[] = (array) $row;	
        }

        $cards['allPieces'] = $allBody;

        $this->data['selectBody'] = $this->parser->parse('_allPieces', $cards, true);

    }
    
    private function selectLegs() {
        $this->load->model('assembleModel');
        $query = $this->assembleModel->allLegs();

        $selectLegs = array();

        foreach ($query as $row) {
            $allLegs[] = (array) $row;	
        }

        $cards['allPieces'] = $allLegs;

        $this->data['selectLegs'] = $this->parser->parse('_allPieces', $cards, true);
        $this->render();

    }
}

/* End of file Assemble_page.php */
/* Location: application/controllers/Assemble_page.php */
