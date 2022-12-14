<?php


namespace App\classes;
use App\classes\Database;


class Auth
{

    private $email;
    private $password;
    private $database, $sql, $queryResult, $user ;


    public function __construct($post = null )
    {
        if (isset($post['email']))
        {
            $this->database  = New Database();
            $this->email     = $post['email'];
            $this->password  = md5($post['password']);
        }
    }

    public function login()
    {
        $this->sql          = "SELECT * FROM users WHERE email = '$this->email' AND password = '$this->password'";
        $this->queryResult  = mysqli_query($this->database->dbConnect(), $this->sql);
        $this->user         = mysqli_fetch_assoc($this->queryResult);
        if ($this->user)
        {
            session_start();
            $_SESSION['id'] = $this->user['id'];
            $_SESSION['name'] = $this->user['name'];
            header('Location: action.php?page=dashboard');
        }
        else
        {
            return "Your credential is wrong";
        }
    }

    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location: action.php?page=home');
    }
}