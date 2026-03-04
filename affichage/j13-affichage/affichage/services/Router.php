<?php

class Router {
    
public function handleRequest(): void {
    if(!isset($_GET['route']) || $_GET['route'] === ''){
            $ctrl = new BlogController();
            $ctrl->index();
        }elseif(str_contains($_GET['route'], 'articles')) {
            $article = $_GET["id"];
            $ctrl = new BlogController();
            $ctrl->article($article);
        	} else {
            $ctrl = new BlogController();
            $ctrl->notFound();
        }
    }
}
?>