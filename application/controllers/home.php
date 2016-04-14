<?php

/*
 * application/controllers/Home.php
 */

class home extends Application {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['pageBody'] = 'homepage';
        $this->gameStatus();
        $this->playerInfo();
        $this->gameRefresh();
        $this->data['gameNumber'] = $this->getRound();
        $this->data['gameState'] = $this->getState();
        $this->data['countdown'] = $this->getCountdown();
        $this->render();
    }

    private function gameStatus() {
        $this->load->model('gameStatus');
        $query = $this->gameStatus->gameSummary();

        $gameStatus = array();

        foreach ($query as $stat) {
            $gameSummary[] = (array) $stat;
        }

        $Status['seriesInfo'] = $gameSummary;

        $this->data['gameStatus'] = $this->parser->parse('_seriesInfo', $Status, true);
    }

    private function playerInfo() {
        $this->load->model('playerInfo');

        //try to call the query in the model to initialize it
        $query = $this->playerInfo->playerEC();
        $playerInfo = array();

        foreach ($query as $row) {
            $playerInfo[] = (array) $row;
        }

        $table = array();
        foreach ($playerInfo as $index => $row) {
            $new = $row;
            switch ($index % 2 == 0) {
                case TRUE:
                    $new['tableClass'] = "firstColumn";
                    break;
                case FALSE:
                    $new['tableClass'] = "secondColumn";
                    break;
            }
            $table[] = $new;
        }
        $players['playerTable'] = $table;
        $this->data['playerInfo'] = $this->parser->parse('_playerTable', $players, true);
    }

    public function gameRefresh() {
        $status = $this->curl->simple_get('http://botcards.jlparry.com/status');
        $xml = @simplexml_load_string($status);
        //creates a variable for sta
        $this->round = (int) $xml->round;
        $this->countdown = (int) $xml->countdown;
        $this->state = (int) $xml->state;
        $this->status = 1;
    }

    public function getRound() {
        return $this->round;
    }

    public function getCountdown() {
        return $this->countdown;
    }

    public function getState() {
        switch ($this->state) {
            case 0:
                $state = "The game is currently not active";
                break;
            case 1:
                $state = "The game is setting up.";
                break;
            case 2:
                $state = "The game is ready and market is open.";
                break;
            case 3:
                $state = "The game is active.";
                break;
            case 4:
                $state = "The game is over.";
                break;
            default:
                $state = "The game is unavailable";
                break;
        }

        return $state;
    }

}

/* End of file Home.php */
/* Location: application/controllers/Home.php */

