<?php

class Router {
    
public function handleRequest(): void {
    if(!isset($_GET['route']) || $_GET['route'] === ''){
            $ctrl = new AuthController();
            $ctrl->login();
        	} else {
            $ctrl = new AuthController();
            $ctrl->notFound();
        }
    }
}
?>