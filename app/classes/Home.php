<?php


namespace App\classes;
//use App\classes\Database;



class Home
{
//    private $database;

    public function index()
    {
//        $this->database = new Database();
//        echo  '<pre>';
//        print_r($this->database->dbConnect());
//        exit();

        header('Location: action.php?page=home');
    }

}