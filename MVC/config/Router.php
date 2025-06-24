<?php

class Router {
    public function __construct() {
    }

    public function handleRequest(array $get) : void {
        if (isset($get["route"]) && ($get["route"]) === "a-propos" ) {
            $controller = new PageController();
            $controller->about();
        } else if (isset($get["route"]) && ($get["route"]) === "home" ) {
            $controller = new PageController();
            $controller->home();
        } else if (isset($get["route"]) && ($get["route"]) === "contact" ) {
            $controller = new PageController();
            $controller->contact();
        } else {
            $controller = new PageController();
            $controller->notFound();
        }
    }
}