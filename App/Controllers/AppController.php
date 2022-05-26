<?php

namespace Controller;

use CoffeeCode\Router\Router;
use League\Plates\Engine;
use Model\VisitorCounterDao;

class AppController
{
    private ?Router $router;
    private ?Engine $view;
    private ?VisitorCounterDao $dao;

    function __construct($router = null)
    {
        $this->router = $router;
        $this->view = Engine::create(PROJECT_ROOT . "/App/View/", "php");
        $this->view?->addData(["router" => $router]);
    }

    private function request_path()
    {
        $request_uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $script_name = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
        $parts = array_diff_assoc($request_uri, $script_name);
        if (empty($parts)) {
            return '/';
        }
        $path = implode('/', $parts);
        if (($position = strpos($path, '?')) !== FALSE) {
            $path = substr($path, 0, $position);
        }
        return $path;
    }

    public function viewLogin($data): void
    {
        echo $this->view?->render("viewLogin", ["title" => "Login - " . PROJECT_NAME]);
    }

    public function homepage($data): void
    {
        $this -> dao = new VisitorCounterDao();
        $routeName = $this->router?->current()?->name;
        $result =  $this -> dao->find("route= :route", http_build_query(["route" => $routeName]))?->fetch();

        if ($result) {
            $this -> dao = (new VisitorCounterDao())->findById($result->id);
            $this -> dao ->hitCounter = ($this -> dao ->hitCounter) + 1;
        } else {
            $this->dao->route = $routeName;
            $this->dao->hitCounter = 1;
        }
        
        $this->dao?->save();

        if($this ?-> dao->fail()) {
            echo "Ocorreu um erro. " . $this?->dao->fail()->getMessage();
        }

        echo $this->view?->render("homepage", ["title" => "Homepage - " . PROJECT_NAME, "counter" => $result->hitCounter + 1]);
    }
}
