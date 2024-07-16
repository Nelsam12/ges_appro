<?php

namespace Controller;

use Core\Controller;
use Model\ArticleModel;

class ArticleController extends Controller
{
    private ArticleModel $articleModel;
    public function __construct()
    {
        parent::__construct();
        $this->articleModel = new ArticleModel;
        $this->load();
    }

    public function load()
    {
        if (isset($_REQUEST['action'])) {
            if ($_REQUEST['action'] == 'lister') {
                $this->lister();
            }elseif ($_REQUEST['action'] == 'ajouter') {
                $this->chargerForm();
            }
            elseif ($_REQUEST['action'] == 'save') {
                unset($_POST['controller']);
                unset($_POST['action']);
               $this->save($_POST);
            }
        } else {
            $this->lister();
        }
    }

    public function lister()
    {
       $articles = $this->articleModel->getAll();
       parent::renderView("article/liste", [
        "articles" => $articles
       ]);
    }
    public function chargerForm()
    {
       parent::renderView("article/form");
    }

    public function save($data){
        
        $this->articleModel->save($data);
        // Redirection vers la liste
        parent::redirecteToRoute("controller=article&action=lister");
    }
}
