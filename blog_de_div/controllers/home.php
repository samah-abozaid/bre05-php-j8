<?php

function homePage() : void
{
    
    require "managers/category_manager.php";
    
    $categories = getCategories();
    
    for($i=0; $i < count($categories); $i++) {
        
        $categories[$i]["posts"] = getPostsForCategory($categories[$i]["id"]);
    }
    
    $template = "templates/home.phtml";
    require "templates/layout.phtml";
}

?>