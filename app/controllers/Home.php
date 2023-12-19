<?php

class Home extends controller{
    public function index($a = '',$b = ''){
        echo "home controller";

        $this->view('home');
    }
}