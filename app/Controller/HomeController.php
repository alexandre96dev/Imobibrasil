<?php
    namespace App\Controller;
    use \App\Utils\View;
    class HomeController{
        public static function getHome()
        {
            return View::render('pages/home', [
                'title' => "esto me lascando",
                'description' => "estou me lascando mais ainda"
            ]);
        }
    }
?>