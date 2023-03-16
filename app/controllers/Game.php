<?php
    class Game extends Controller {
        public function index()
        {
            $this->view('game/index');
        }
        public function pukulTikus()
        {
            $this->view('game/pukulTikus');
        }
        public function suit()
        {
            $this->view('game/suit');
        }
    }