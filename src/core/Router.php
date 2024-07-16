<?php
namespace Core;

use Controller\ArticleController;
use Controller\SecuriteController;

class Router
{
    public static function run()
    {
        if (isset($_REQUEST["controller"])) {
            if ($_REQUEST["controller"] == "securite") {
                $controller = new SecuriteController();
            } elseif ($_REQUEST['controller'] == 'article') {
                $controller = new ArticleController();
            }
        } else {
            $controller = new SecuriteController();
        }
    }
}
