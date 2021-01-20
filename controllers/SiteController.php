<?php
namespace app\controllers;

use app\core\Controller;

class SiteController extends Controller
{
    public function contact()
    {
        return $this->render('contact');
    }

    public function home()
    {
        $params = [
                'name' => 'Vanka77a'
        ];
        return $this->render('home',$params);
    }

    public function handleContact()
    {
        return 'Handling submitted data';
    }
}

