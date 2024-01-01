<?php

class Profile  extends Controller{
    public function index(){
        echo "profile controller";
        echo "<br>";

        $user = new User;

        $result = $user->findAll();

        show($result);
    }
}