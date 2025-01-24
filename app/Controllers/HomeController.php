<?php

namespace App\Controllers;

use App\Services\UserRegistry;

class HomeController
{
    public function index()
    {
        $users = UserRegistry::getAllUsers();

        return $this->render('home', ['users' => $users]);
    }

    private function render(string $view, array $params = [])
    {
        extract($params);
        ob_start();
        require_once "../app/Views/$view.php";
        $content = ob_get_clean();
        require_once "../app/Views/layouts/main.php";
    }
}
