<?php

class Router {
    public function __construct() {
    }

    public function handleRequest(array $get) : void {
        if (isset($get["route"]) && ($get["route"]) === "a-propos" ) {

        } else if (!isset($get["route"])) {

        } else {
            
        }
    }
}