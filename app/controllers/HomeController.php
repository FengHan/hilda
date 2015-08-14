<?php

class HomeController extends BaseController
{
    public function home()
    {
        $data = Article::first();
        include dirname(__FILE__) . '/../views/home.php';
    }
}