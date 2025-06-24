<?php

class Router {
    public function __construct() {
    }

    public function handleRequest(array $get) : void {
        if (isset($get["route"]) && ($get["route"]) === "a-propos" ) {
            $controller = new PageController();
            $controller->about();
        } else if (!isset($get["route"])) {
            $controller = new PageController();
            $controller->home();
        } else {
            $controller = new PageController();
            $controller->notFound();
        }
    }
}