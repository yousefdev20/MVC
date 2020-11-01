<?php


class homeController extends controller
{
    protected $user;
    public function __construct()
    {
        $this->user = $this::model('User');
    }

    public function index($name = '', $paramters = ''){

        $users = json_encode( User::all());
        self::view('Home/index', $users);
    }
    public function show($name = '', $par = ''){
        echo $name."    ".$par;
    }

}