<?php
namespace Controller;

class MainController
{
    public function homeView()
    {
        require('Views/home.php');
    }

    public function connectionPage()
    {
        require('Views/connect.php');
    }

    public function contactUs()
    {
        require_once('Views/contactUs.php');
    }

    public function render($view, $data=[])
    {
        extract($data);
        require($view);
    }
}
