<?php

class HomeController extends BaseController
{
    public function home()
    {
        //$data = Article::first();
        //include dirname(__FILE__) . '/../views/home.php';
        $this->view = View::make('home.index')->with('article',Article::first())
                                        ->withTitle('Hello Hilda');

        $this->mail = Mail::to(['keke231@qq.com', '820086734@qq.com'])
            ->from('MichaelHan <hanfeng@163.com>')
            ->title('This email is tested by Hilda.')
            ->content('<h1>Hello~~</h1>');
    }
}